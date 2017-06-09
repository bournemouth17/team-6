using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Main : MonoBehaviour {

    private enum State { Welcome, ScanMode, HoldingToOp, OpToHolding };
    private State state;

    private static bool _runWebcam = false;
    public static bool runwebcam { get { return _runWebcam; } }

    [SerializeField] private Canvas welcome, scan;
    [SerializeField] private Button scanButton;
    [SerializeField] private Text scanPurposeText, scanConfirmationText;
    [SerializeField] private Image scanConfirmationBg;

    void Start () {
        state = State.Welcome;

        welcome.gameObject.SetActive (true);
        scan.gameObject.SetActive(false);
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

    private void holdingToOp (string text) {
        int num = checkParse(text, "volunteer");
        if (num != -1) {
            _runWebcam = false;
            scanConfirmationText.text = string.Format("Volunteer {0} is now in operation.", num);
            scanConfirmationBg.gameObject.SetActive(true);
            StartCoroutine(fadeOutConfirmation(1.9f));
        }

    }

    // Button callbacks

    public void OnButtonProceed () {

        welcome.gameObject.SetActive(false);
        scan.gameObject.SetActive(true);

        QR.doProcessQR = holdingToOp;
        _runWebcam = true;
    }
}
