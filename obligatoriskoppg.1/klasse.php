<?php   /* Klasse */
/*
/*      Programmet motar fra et HTML-skjema klassekode og klassenavn
/*      Programmet skriver data (klassekode og klassenavn) til filen "klasse.txt"
*/

$filnavn="filer/klasse.txt";       /* Angir plasseringen til klasse.txt filen i $filnavn */

$klassekode=$_POST["klassekode"];   /* Henter input data fra bruker */
$klassenavn=$_POST["klassenavn"];   /* Henter input data fra bruker */


if(!$klassekode || !$klassenavn)    /* Hvis ikke det er skrevet inn noe i feltene, print en beskjed */
{
    print("Alle feltene må fylles ut");
}

else
{
    $filoperasjon="a";                          /* Filoperasjon "a" for append/tilføying angitt */
    
    $linje=$klassekode.";".$klassenavn."\n";    /* Linjen som skal skirves til fil oprettet */
    
    $fil=fopen($filnavn, $filoperasjon);        /* Åpner filen klasse.txt og gjør filen klar for tilføying med $filoperasjon="a"; variabelen */
    
    fwrite($fil, $linje);                       /* Skriver inn til filen klasse.txt */
    
    fclose($fil);                               /* Lukker filen klasse.txt */
    
    print("Følgende data er nå registert på fil: <br/><br/> $klassekode, $klassenavn");    /* Printer ut en bekreftelses setning om at data er skrevet inn til filen */
}

?>