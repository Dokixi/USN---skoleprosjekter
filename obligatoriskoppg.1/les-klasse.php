<?php   /* Lesing av klasse.txt data */
/*
/*      Programmet leser data (klassekode og klassenavn) fra filen "klasse.txt"
/*      Programmet skriver ut alle registrerte klasser på formen klassekode og klassenavn
*/

$filnavn="filer/klasse.txt";  /* Angir plasseringen til klasse.txt filen i $filnavn */

$filoperasjon="r";  /* Filoperasjon "r" for read/lesing angitt */

print("Følgende personer er registrert: <br/>");    /* Printer ut en beskjed før det blir vist registrerte personer */
print("<br/>");

$fil=fopen($filnavn, $filoperasjon);   /* Åpner filen og gjør filen klar for read/lesing med $filoperasjon="r"; variabelen */

/* (while loopen kjører kun hvis følgende condition er TRUE/SANN) */

while($linje=fgets($fil))              /* En linje lest fra fil */
{
    if($linje!="")                     /* Linjen lest fra fil er ikke tom */
    {
        $del=explode(";", $linje);     /* Innholdet av linjen delt opp */
        $klassekode=$del[0];           /* klassekode hentes ut */
        $klassenavn=$del[1];           /* klassenavn hentet ut */
    
        print("$klassekode, $klassenavn <br/>");
    }
}

fclose($fil);                           /* Lukker filen */

?>