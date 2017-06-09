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

    // Use this for initialization
    void Start () {
        state = State.Welcome;

        welcome.enabled = true;
        scan.enabled = false;
        scanConfirmationBg.enabled = false;

    }
	
	// Update is called once per frame
	void Update () {
		
	}

    // QR parse heper
    private int checkParse (string text, string cookie) {
        if (text.Substring(0, cookie.Length).Equals(cookie)) {
            return int.Parse(text.Substring(cookie.Length));
        }

        // Error
        return -1;
    }

    private IEnumerator fadeOutConfirmation() {
        print("In Coroutine");
        yield return new WaitForSeconds(1f);
        scanConfirmationBg.enabled = false;
        _runWebcam = true;
        yield return new WaitForSeconds(1f);
    }
    
    // Various QR processing situations

    private void holdingToOp (string text) {
        int num = checkParse(text, "volunteer");
        if (num != -1) {
            _runWebcam = false;
            scanConfirmationText.text = string.Format("Volunteer {0} is now in operation.", num);
            scanConfirmationBg.enabled = true;
            StartCoroutine(fadeOutConfirmation());
            print("After Start Coroutine");
        }

    }

    // Button callbacks

    public void OnButtonProceed () {

        welcome.enabled = false;
        scan.enabled = true;

        QR.doProcessQR = holdingToOp;
        _runWebcam = true;
    }
}
