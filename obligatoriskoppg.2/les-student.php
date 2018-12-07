<?php   /* Lesing av student.txt data */
/*
/*      Programmet leser data (brukernavn, fornavn, etternavn og klassekode) fra filen "student.txt"
/*      Programmet skriver ut alle registrerte studenter på formen brukernavn, fornavn, etternavn og klassekode
*/

$filnavn="filer/student.txt";  /* Angir plasseringen til student.txt filen i $filnavn */

include("start.html");

$filoperasjon="r";  /* Filoperasjon "r" for read/lesing angitt */

print("F&oslash;lgende personer er registrert: <br/>");    /* Printer ut en beskjed før det blir vist regisrterte personer */
print("<br/>");

$fil=fopen($filnavn, $filoperasjon);    /* Åpner filen og gjør filen klar for read/lesing med $filoperasjon="r"; variabelen */

/* (while loopen kjører kun hvis følgende condition er TRUE/SANN) */

while($linje=fgets($fil))              /* En linje lest fra fil */
{
    if($linje!="")                     /* Linjen lest fra fil er ikke tom */
    {
        $del=explode(";", $linje);     /* Innholdet av linjen delt opp */
        $brukernavn=trim($del[0]);     /* brukernavn hentes ut */
        $fornavn=trim($del[1]);        /* fornavn hentet ut */
        $etternavn=trim($del[2]);      /* etternavn hentet ut */
        $klassekode=trim($del[3]);     /* klassekode hentet ut */
    
        print("$brukernavn, $fornavn, $etternavn, $klassekode <br/>");
    }
}

fclose($fil);                           /* Lukker filen */
include("slutt.html");

?>