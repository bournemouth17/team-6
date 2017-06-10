﻿using System;
using UnityEngine;
using UnityEngine.UI;
using ZXing;
//using ZXing.QrCode;

public class QR : MonoBehaviour {

    public static Action<string> ProcessQR;

    private WebCamTexture camTexture;
    private Rect screenRect;
    [SerializeField] private Image destinationImage;
    private int QRphase = 0;

    void Start () {
        //screenRect = new Rect(0, 0, Screen.width, Screen.height);
        Vector2 size = destinationImage.rectTransform.sizeDelta;
        Vector2 position = destinationImage.transform.position;
        position.y = Screen.height - position.y;
        screenRect = new Rect(position - size/2, size);

        camTexture = new WebCamTexture();
        camTexture.requestedHeight = Screen.height;
        camTexture.requestedWidth = Screen.width;
        if (camTexture != null) {
            camTexture.Play();
        }
    }

    void OnGUI () {
        // Cheers to https://medium.com/@adrian.n/reading-and-generating-qr-codes-with-c-in-unity-3d-the-easy-way-a25e1d85ba51
        // Drawing the camera on screen
        if (Main.runwebcam) {
            GUI.DrawTexture(screenRect, camTexture, ScaleMode.ScaleAndCrop);
            // do the reading — you might want to attempt to read less often than you draw on the screen for performance sake
            QRphase = (QRphase + 1) % 30;
            if (QRphase == 0) {
                try {
                    IBarcodeReader barcodeReader = new BarcodeReader();
                    // decode the current frame
                    var result = barcodeReader.Decode(camTexture.GetPixels32(), camTexture.width, camTexture.height);
                    if (result != null) {
                        if (ProcessQR == null)
                            Debug.LogWarning("DECODED TEXT FROM QR DROPPED: " + result.Text);
                        else
                            ProcessQR(result.Text);
                    }

                } catch (Exception ex) {
                    Debug.LogWarning(ex);
                }
            }
        }
    }

    void Update () {

    }
}
