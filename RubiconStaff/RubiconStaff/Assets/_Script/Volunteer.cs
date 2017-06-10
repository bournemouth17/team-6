using UnityEngine;

// The purpose of this class is to simulate the volunteer instances that should reside in a database but sadly don't

public class Volunteer {

    private static int totalNo = 0;
    private static string[] fnPool = { "John", "Jane", "Steve", "Bill", "Anna", "Oliver", "Daniel", "Ellie" },
                            lnPool = { "Doe", "Wiseman", "Nash", "Johnson", "Veall" },
                            snPool = { "Knows 5 languages", "Best swimmer you've ever seen", "Can mentally multiply 4 digit numbers", "Likes to shoot assault rifles" };

    public int no;
    public string firstName, lastName, staticNotes, dynamicNotes, lastGuidance;
    public bool approved, inOperation;

    public Volunteer() {
        totalNo++;
        no = totalNo;
        firstName = fnPool[Random.Range(0, fnPool.Length)];
        lastName = lnPool[Random.Range(0, lnPool.Length)];
        staticNotes = snPool[Random.Range(0, snPool.Length)];
        dynamicNotes = "";
        lastGuidance = Random.Range(0, 2) == 0 ?
                "" + Random.Range(0, 31) + ".0" + Random.Range(4, 6) + ".2017" :
                "Never";
        approved = false;
        inOperation = false;
    }
}
