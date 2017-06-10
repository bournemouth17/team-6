using System.Collections;
using System;
using UnityEngine;
using UnityEngine.UI;
using MySql.Data.MySqlClient;
using System.Data.SqlClient;

public class Main : MonoBehaviour {

    private enum State { Welcome, ModeSelection, Holding };
    private State state;

    private static bool _runWebcam = false;
    public static bool runwebcam { get { return _runWebcam; } }

    [SerializeField] private Canvas welcome, scanRole, holding, scanHolding;
    [SerializeField] private Button scanButton;
    [SerializeField] private Text scanPurposeText, scanConfirmationText;
    [SerializeField] private Image scanConfirmationBg;
    [SerializeField] private InputField teamInput, numberInput;

    private string activeTeamName;
    private Canvas activeCanvas;

    void Start () {
        state = State.Welcome;
        activeCanvas = welcome;
 
        welcome.gameObject.SetActive (true);
        scanRole.gameObject.SetActive (false);
        holding.gameObject.SetActive (false);
        scanHolding.gameObject.SetActive (false);

        scanConfirmationBg.gameObject.SetActive(false);

    }

    private void ChangeCanvas (Canvas newCanvas) {
        activeCanvas.gameObject.SetActive(false);
        activeCanvas = newCanvas;
        activeCanvas.gameObject.SetActive(true);

        if (newCanvas == scanHolding || newCanvas == scanRole) {
            _runWebcam = true;
        }
        else {
            _runWebcam = false;
        }
    }


    // QR parse heper
    private int checkParse (string text, string cookie) {
        if (text.Substring(0, cookie.Length).Equals(cookie)) {
            return int.Parse(text.Substring(cookie.Length));
        }

        // Error
        return -1;
    }

    private IEnumerator fadeOutConfirmation(float delay) {
        yield return new WaitForSeconds(delay);
        scanConfirmationText.text = "";
        scanConfirmationBg.gameObject.SetActive(false);
        _runWebcam = true;
    }


    // Various QR processing situations

    private void holdingSignon (string text) {
        int num = checkParse(text, "volunteer");
        if (num != -1) {
            _runWebcam = false;
            scanConfirmationText.text = string.Format("Volunteer {0} is now on team {1}.", num, activeTeamName);
            scanConfirmationBg.gameObject.SetActive(true);
            StartCoroutine(fadeOutConfirmation(1.9f));
        }

    }

    private void holdingSignoff (string text) {
        int num = checkParse(text, "volunteer");
        if (num != -1) {
            _runWebcam = false;
            scanConfirmationText.text = string.Format("Volunteer {0} is signed off.", num);
            scanConfirmationBg.gameObject.SetActive(true);
            StartCoroutine(fadeOutConfirmation(1.9f));
        }

    }

    private void selectMode (string text) {
        //print("|"+text+ "|");
        if (text.Equals("holding")) {
            ChangeCanvas(holding);
        }

        else if (text.Equals("reception")) {
            // TODO
        }
        else if (text.Equals("guidance")) {
            // TODO
        }
    }

    // Button callbacks

    public void OnButtonProceed () {

        // TODO Establish SQL connection
        MySqlConnection conn = new MySqlConnection("user id=force;server=34.252.35.209;connection timeout=30");
        try {
            conn.Open();
        } catch (Exception e) {
            print(e);
        }

        ChangeCanvas(scanRole);

        QR.doProcessQR = selectMode;
    }

    public void OnButtonSignOn () {

        activeTeamName = teamInput.text;
        if (activeTeamName.Length > 1) {

            ChangeCanvas(scanHolding);

            // Adjust text on scan
            scanPurposeText.text = string.Format("Scan a volunteer's QR code to sign them onto {0} team.", activeTeamName);
            QR.doProcessQR = holdingSignon;
            _runWebcam = true;
        }
        else {
            activeTeamName = null;
        }
    }

    public void OnButtonSignOff () {
        activeTeamName = null;
        ChangeCanvas(scanHolding);

        scanPurposeText.text = string.Format("Scan a volunteer's QR code to sign them off.", activeTeamName);

        QR.doProcessQR = holdingSignoff;
        _runWebcam = true;
    }

    public void OnButtonUseNumber() {
        QR.doProcessQR("volunteer" + numberInput.text);
    }

    public void OnButtonChangeRole() {
        ChangeCanvas(scanRole);
    }

    public void OnButtonBack() {
        ChangeCanvas(holding);
    }
}
