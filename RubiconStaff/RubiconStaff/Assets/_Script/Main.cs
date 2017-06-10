using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Main : MonoBehaviour {

    private enum State { Welcome, ModeSelection, Holding };
    private State state;

    private static bool _runWebcam = false;
    public static bool runwebcam { get { return _runWebcam; } }

    [SerializeField] private Canvas welcome, scan, holding;
    [SerializeField] private Button scanButton;
    [SerializeField] private Text scanPurposeText, scanConfirmationText;
    [SerializeField] private Image scanConfirmationBg;
    [SerializeField] private InputField teamInput;

    private string activeTeamName;

    void Start () {
        state = State.Welcome;

        welcome.gameObject.SetActive (true);
        scan.gameObject.SetActive(false);
        holding.gameObject.SetActive(false);
        scanConfirmationBg.gameObject.SetActive(false);

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
            scanConfirmationText.text = string.Format("Volunteer {0} is now in operation.", num);
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
            _runWebcam = false;
            scan.gameObject.SetActive(false);
            holding.gameObject.SetActive(true);
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

        welcome.gameObject.SetActive(false);
        scan.gameObject.SetActive(true);

        QR.doProcessQR = selectMode;
        _runWebcam = true;
    }

    public void OnButtonSignOn () {

        activeTeamName = teamInput.text;
        if (activeTeamName.Length > 1) {

            holding.gameObject.SetActive(false);
            scan.gameObject.SetActive(true);

            // Adjust text on scan

            QR.doProcessQR = holdingSignon;
            _runWebcam = true;
        }
        else {
            activeTeamName = null;
        }
    }

    public void OnButtonSignOff () {

        holding.gameObject.SetActive(false);
        scan.gameObject.SetActive(true);

        // Adjust text on scan

        QR.doProcessQR = holdingSignoff;
        _runWebcam = true;
    }
}
