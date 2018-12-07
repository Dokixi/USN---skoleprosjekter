<?php   /* Klasseliste */
/*
/*      Programmet mottar en klassekode fra et html-skjema
/*      Programmet skriver ut alle registrerte studenter som har samme klassekode
*/

$filnavn="filer/student.txt";       /* Angir plasseringen til filen */

$klassekode=$_POST["klassekode"];
$klassekode=trim($klassekode);      /* Fjerner mellomrom i starten og slutten */

/* --------------------------------------------------------------------------------------------------------------------------------- */

if(!$klassekode)
{
    print("Skriv inn klassekoden!");             /* Hvis det IKKE er skrevet noe i feltet, print en beskjed */
}

else if($klassekode)
{
    print("Studenter i denne klasssen: $klassekode <br/>");     /* Hvis det er skrevet en klassekode, print så en beskjed */
    print("<br/>");
}

/* --------------------------------------------------------------------------------------------------------------------------------- */

$filoperasjon="r";                               /* Filoperasjon "r" for read/lesing angitt */

$fil=fopen($filnavn, $filoperasjon);             /* Åpner filen student.txt og gjør filen klar for read/lesing med $filoperasjon="r"; variabelen */

/* (while loopen kjører kun hvis følgende condition er TRUE/SANN) */

while($linje=fgets($fil))                        /* En linje lest fra fil */
{
    if($linje!="")                               /* Linjen lest fra fil er ikke tom */
    {
        $del=explode(";", $linje);               /* Innholdet av linjen delt opp */
        $registrertKlassekode=trim($del[3]);     /* Klassekode hentet ut */
        
        if($registrertKlassekode==$klassekode)   /* Hvis registrertKlassekode er lik klassekoden skrevet av brukeren så hent ut alle registrerte studenter med samme klassekode og print de ut */
        {
            $brukernavn=trim($del[0]);           /* brukernavn hentes ut */
            $fornavn=trim($del[1]);              /* fornavn hentet ut */
            $etternavn=trim($del[2]);            /* etternavn hentet ut */
            $klassekode=trim($del[3]);           /* klassekode hentet ut */
        
            print("$brukernavn, $fornavn, $etternavn, $klassekode <br/>");
        }
    
    }
}

fclose($fil);                                    /* Lukker filen */

?>