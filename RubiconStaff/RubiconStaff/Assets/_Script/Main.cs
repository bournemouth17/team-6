using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Main : MonoBehaviour {

    private enum State { Welcome, ScanMode, HoldingToOp, OpToHolding };

    private State state;

    [SerializeField] private Canvas welcome;

	// Use this for initialization
	void Start () {
        state = State.Welcome;

        QR.doProcessQR = holdingToOp;
	}
	
	// Update is called once per frame
	void Update () {
		
	}

    private int checkParse (string text, string cookie) {
        if (text.Substring(0, cookie.Length).Equals(cookie)) {
            return int.Parse(text.Substring(cookie.Length));
        }

        // Error
        return -1;
    }

    private void holdingToOp (string text) {
        int num = checkParse(text, "volunteer");
        if (num != -1) {
            print("Parsed! " + num);
        }

    }
}
