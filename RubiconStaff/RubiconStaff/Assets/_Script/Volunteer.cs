using System;

// The purpose of this class is to simulate the volunteer instances that should reside in a database but sadly don't

public class Volunteer {

    private static Random random = new Random();
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
        firstName = fnPool[random.Next(0, fnPool.Length-1)];
        lastName = lnPool[random.Next(0, lnPool.Length-1)];
        staticNotes = snPool[random.Next(0, snPool.Length-1)];
        dynamicNotes = "";
        lastGuidance = random.Next(0, 1) == 0 ?
                "" + random.Next(0, 30) + ".0" + random.Next(4, 5) + ".2017" :
                "Never";
        approved = false;
        inOperation = false;
    }
}
