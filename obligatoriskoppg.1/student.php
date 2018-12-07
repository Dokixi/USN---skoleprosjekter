<?php   /* Registrering av student */
/*
/*      Programmet motar fra et HTML-skjema brukernavn, fornavn, etternavn og klassekode
/*      Programmet skriver data (brukernavn, fornavn, etternavn og klassekode) til filen "student.txt"
*/

$filnavn="filer/student.txt";       /* Angir plasseringen til student.txt filen i $filnavn */

$brukernavn=$_POST["brukernavn"];   /* Henter input data fra bruker */
$fornavn=$_POST["fornavn"];         /* Henter input data fra bruker */
$etternavn=$_POST["etternavn"];     /* Henter input data fra bruker */
$klassekode=$_POST["klassekode"];   /* Henter input data fra bruker */


if(!$brukernavn || !$fornavn || !$etternavn || !$klassekode)        /* Hvis det IKKE er skrevet inn noe i feltene, print en beskjed */
{
    print("Alle feltene må fylles ut");
}

else
{
    $filoperasjon="a";                          /* Filoperasjon "a" for append/tilføying angitt */
    
    $linje=$brukernavn.";".$fornavn.";".$etternavn.";".$klassekode."\n";    /* Linjen som skal skrives til fil oprettet */
    
    $fil=fopen($filnavn, $filoperasjon);        /* Åpner filen student.txt og gjør filen klar for tilføying med $filoperasjon="a"; variabelen */
    
    fwrite($fil, $linje);                       /* Skriver inn $brukernavn;$fornavn;$etternavn;$klassekode til filen student.txt */
    
    fclose($fil);                               /* Lukker filen student.txt */
    
    print("Følgende data er nå registert på fil: <br/><br/>"); /* Printer ut en bekreftelses setning om at data er skrevet inn til filen */
    
    print("Brukernavn: $brukernavn <br/>");
    print("Fornavn: $fornavn <br/>");
    print("Etternavn: $etternavn <br/>");
    print("Klassekode: $klassekode <br/>");
}

?>