using System.Collections;
using System;
using UnityEngine;
using UnityEngine.UI;
//using MySql.Data.MySqlClient;
//using System.Data.SqlClient;

public class Main : MonoBehaviour {

    private enum State { Welcome, ModeSelection, Guidance, Holding };
    private State state;

    private static bool _runWebcam = false;
    public static bool runwebcam { get { return _runWebcam; } }

    [SerializeField] private Canvas welcome, scanRole, holding, guidance, scanVolunteer;
    [SerializeField] private Button scanButton;
    [SerializeField] private Text scanPurposeText, scanConfirmationText, guidanceHeader, guidanceText;
    [SerializeField] private Image scanConfirmationBg;
    [SerializeField] private InputField teamInput, numberInput, guidanceNotes;

    private string activeTeamName;
    private Canvas activeCanvas;
    private Volunteer activeVolunteer;
    private Volunteer[] volunteers = { new Volunteer(), new Volunteer(), new Volunteer(), new Volunteer(), new Volunteer(), new Volunteer() };

    void Start () {
        state = State.Welcome;
        activeCanvas = welcome;
 
        welcome.gameObject.SetActive (true);
        scanRole.gameObject.SetActive (false);
        holding.gameObject.SetActive (false);
        guidance.gameObject.SetActive (false);
        scanVolunteer.gameObject.SetActive (false);

        scanConfirmationBg.gameObject.SetActive(false);

    }

    private void ChangeCanvas (Canvas newCanvas) {
        activeCanvas.gameObject.SetActive(false);
        activeCanvas = newCanvas;
        activeCanvas.gameObject.SetActive(true);

        if (newCanvas == scanVolunteer || newCanvas == scanRole) {
            _runWebcam = true;
        }
        else {
            _runWebcam = false;
        }
    }


    // QR parse heper
    private int CheckParse (string text, string cookie) {
        if (text.Substring(0, cookie.Length).Equals(cookie)) {
            return int.Parse(text.Substring(cookie.Length));
        }

        // Error
        return -1;
    }

    private IEnumerator FadeOutMessage(float delay, Action afterFade) {
        yield return new WaitForSeconds(delay);
        scanConfirmationText.text = "";
        scanConfirmationBg.gameObject.SetActive(false);
        afterFade();
    }

    private void PopupMessage(string text, float delay, Action afterFade) {
        scanConfirmationText.text = text;
        scanConfirmationBg.gameObject.SetActive(true);
        StartCoroutine(FadeOutMessage(delay, afterFade));
    }

    // Various QR processing situations

    private void HoldingSignon (string text) {
        int num = CheckParse(text, "volunteer");
        activeVolunteer = volunteers[num - 1];

        if (num > 0 && num <= volunteers.Length) {
            _runWebcam = false;

            if (!activeVolunteer.inOperation && activeVolunteer.approved) {
                volunteers[num - 1].inOperation = true;
                PopupMessage(string.Format("Volunteer {0} is now on team {1}.", num, activeTeamName), 2.2f, () => _runWebcam = true);
            }
            else {
                if (activeVolunteer.inOperation) {
                    PopupMessage(string.Format("Volunteer {0} is already on duty!", num, activeTeamName), 2.5f, () => _runWebcam = true);
                }
                else {
                    PopupMessage(string.Format("Volunteer {0} is not approved for duty!", num, activeTeamName), 2.5f, () => _runWebcam = true);
                }
            }
        }
    }

    private void HoldingSignoff (string text) {
        int num = CheckParse(text, "volunteer");
        activeVolunteer = volunteers[num - 1];

        if (num > 0 && num <= volunteers.Length) {
            _runWebcam = false;
     
            if (activeVolunteer.inOperation) {
                activeVolunteer.inOperation = false;
                PopupMessage(string.Format("Volunteer {0} is signed off.", num, activeTeamName), 2f, () => _runWebcam = true);
            }
            else {
                PopupMessage(string.Format("Volunteer {0} was already off duty!", num, activeTeamName), 2.5f, () => _runWebcam = true);
            }
        }

    }

    private void SelectMode (string text) {
        //print("|"+text+ "|");
        if (text.Equals("holding")) {
            ChangeCanvas(holding);
            state = State.Holding;
        }

        else if (text.Equals("reception")) {
            // TODO
        }

        else if (text.Equals("guidance")) {
            ChangeCanvas(scanVolunteer);
            scanPurposeText.text = string.Format("Scan a volunteer's QR code to view their details.");
            QR.ProcessQR = IdForGuidance;
            state = State.Guidance;
        }
    }

    private void IdForGuidance (string text) {
        int num = CheckParse(text, "volunteer");
        if (num != -1) {
            // Populate user data
            activeVolunteer = volunteers[num - 1];

            guidanceHeader.text = string.Format("Volunteer #{0}\n{1} {2}", num, activeVolunteer.firstName, activeVolunteer.lastName);
            guidanceText.text = string.Format("Last Guidance session: {0}\n{1}", activeVolunteer.lastGuidance, activeVolunteer.staticNotes);
            guidanceNotes.text = activeVolunteer.dynamicNotes;
 
            ChangeCanvas(guidance);
            
            
        }
    }

    // Button callbacks

    public void OnButtonProceed () {

        // TODO Establish SQL connection
        // Screw
  
        //MySqlConnection conn = new MySqlConnection("user id=force;server=34.252.35.209;connection timeout=30");
        //try {
        //    conn.Open();
        //} catch (Exception e) {
        //    print(e);
        //}
        //state = State.ModeSelection;
        //ChangeCanvas(scanRole);
        //QR.doProcessQR = selectMode;

        OnButtonChangeRole();
    }

    public void OnButtonSignOn () {

        activeTeamName = teamInput.text;
        if (activeTeamName.Length > 1) {

            ChangeCanvas(scanVolunteer);

            // Adjust text on scan
            scanPurposeText.text = string.Format("Scan a volunteer's QR code to sign them onto {0} team.", activeTeamName);
            QR.ProcessQR = HoldingSignon;
        }
        else {
            activeTeamName = null;
        }
    }

    public void OnButtonSignOff () {
        activeTeamName = null;
        ChangeCanvas(scanVolunteer);

        scanPurposeText.text = string.Format("Scan a volunteer's QR code to sign them off.", activeTeamName);

        QR.ProcessQR = HoldingSignoff;
    }

    public void OnButtonUseNumber() {
        // Laziest hack
        QR.ProcessQR("volunteer" + numberInput.text);
    }

    public void OnButtonChangeRole() {
        state = State.ModeSelection;
        ChangeCanvas(scanRole);
        QR.ProcessQR = SelectMode;
    }

    public void OnButtonBack() {
        // Hack around abusive canvas reusage
        if (state == State.Holding) {
            ChangeCanvas(holding);
        }
        else {
            OnButtonChangeRole();
        }
    }

    public void OnButtonConfirm() {
        activeVolunteer.dynamicNotes = guidanceNotes.text;
        activeVolunteer.approved = true;
        PopupMessage("Volunteer accepted", 1f, () => ChangeCanvas(scanVolunteer));
    }

    public void OnButtonReject() {
        activeVolunteer.dynamicNotes = guidanceNotes.text;
        activeVolunteer.approved = false;
        PopupMessage("Volunteer rejected", 1f, () => ChangeCanvas(scanVolunteer));
    }
}
