<?php   /* Registrer klasse */
/*
/*      Programmet motar fra et HTML-skjema klassekode og klassenavn
/*      Programmet skriver data (klassekode og klassenavn) til filen "klasse.txt"
*/

include("start.html");
?>

<h3>Skriv inn din klasse</h3>
    
  <form method="post" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema" onSubmit="return validerRegistrerKlasseSkjema()">
    Skriv inn klassekode <input type="text" id="klassekode" name="klassekode" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" /> <br/>
    Skriv inn klassenavn <input type="text" id="klassenavn" name="klassenavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" /> <br/>
    <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()" /> <br />
  </form>

<div id="melding"> </div>

<?php

$filnavn="filer/klasse.txt";       /* Angir plasseringen til klasse.txt filen i $filnavn */

if (isset($_POST ["registrerKlasseKnapp"]))
{
    include("validering.php");
    
    $klassekode=$_POST["klassekode"];   /* Henter input data fra bruker */
    $klassenavn=$_POST["klassenavn"];   /* Henter input data fra bruker */
    
    $lovligKlassekode=validerKlassekode($klassekode);   /* Funksjonskall */
    $lovligKlassenavn=validerKlassenavn($klassenavn);   /* Funksjonskall */
    
    if($lovligKlassekode && $lovligKlassenavn)
    {
        $filoperasjon="a";                          /* Filoperasjon "a" for append/tilføying angitt */
    
        $linje=trim($klassekode) . ";" . trim($klassenavn) ."\n";    /* Linjen som skal skirves til fil oprettet */
    
        $fil=fopen($filnavn, $filoperasjon);        /* Åpner filen klasse.txt og gjør filen klar for tilføying med $filoperasjon="a"; variabelen */
    
        fwrite($fil, $linje);                       /* Skriver inn til filen klasse.txt */
    
        fclose($fil);                               /* Lukker filen klasse.txt */
    
        print("F&oslash;lgende data er nå registert på fil: <br/><br/> $klassekode, $klassenavn");    /* Printer ut en bekreftelses setning om at data er skrevet inn til filen */
    }
    
    else
    {
        print("Klassekode eller klassenavn er ikke korrekt fylt ut!");
    }
}

include("slutt.html");

?>