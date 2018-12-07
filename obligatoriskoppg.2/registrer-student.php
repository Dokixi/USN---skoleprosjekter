<?php   /* Registrer student */
/*
/*      Programmet motar fra et HTML-skjema brukernavn, fornavn, etternavn og klassekode
/*      Programmet skriver data (brukernavn, fornavn, etternavn og klassekode) til filen "student.txt"
*/

include("start.html");
?>

<h3>Student registrering</h3>
    
  <form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema" onSubmit="return validerRegistrerStudentSkjema()">
    Brukernavn <input type="text" id="brukernavn" name="brukernavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" /> <br/>
    Fornavn <input type="text" id="fornavn" name="fornavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" /> <br/>
    Etternavn <input type="text" id="etternavn" name="etternavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" /> <br/>
    Klassekode <input type="text" id="klassekode" name="klassekode" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onKeyUp="vis(this.value)" /> <br/>
    <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernMelding()" /> <br />
  </form>

<div id="melding"> </div>

<?php

    $filnavn="filer/student.txt";       /* Angir plasseringen til student.txt filen i $filnavn */

    if (isset($_POST ["registrerStudentKnapp"]))
    {
        include("validering.php");
        
        $brukernavn=$_POST["brukernavn"];   /* Henter input data fra bruker */
        $fornavn=$_POST["fornavn"];         /* Henter input data fra bruker */
        $etternavn=$_POST["etternavn"];     /* Henter input data fra bruker */
        $klassekode=$_POST["klassekode"];   /* Henter input data fra bruker */
        
        $lovligBrukernavn=validerBrukernavn($brukernavn);   /* Funksjonskall */
        $lovligFornavn=validerFornavn($fornavn);            /* Funksjonskall */
        $lovligEtternavn=validerEtternavn($etternavn);      /* Funksjonskall */
        $lovligKlassekode=validerKlassekode($klassekode);   /* Funksjonskall */
        
        if($lovligBrukernavn && $lovligFornavn && $lovligEtternavn && $lovligKlassekode)
        {
            $filoperasjon="a";                          /* Filoperasjon "a" for append/tilføying angitt */
    
            $linje=trim($brukernavn) . ";" . trim($fornavn) . ";" . trim($etternavn) . ";" . trim($klassekode) ."\n";    /* Linjen som skal skrives til fil oprettet */
    
            $fil=fopen($filnavn, $filoperasjon);        /* Åpner filen student.txt og gjør filen klar for tilføying med $filoperasjon="a"; variabelen */
    
            fwrite($fil, $linje);                       /* Skriver inn $brukernavn;$fornavn;$etternavn;$klassekode til filen student.txt */
    
            fclose($fil);                               /* Lukker filen student.txt */
    
            print("F&oslash;lgende data er nå registert på fil: <br/><br/>"); /* Printer ut en bekreftelses setning om at data er skrevet inn til filen */
    
            print("Brukernavn: $brukernavn <br/>");
            print("Fornavn: $fornavn <br/>");
            print("Etternavn: $etternavn <br/>");
            print("Klassekode: $klassekode <br/>");
        }
        
        else
        {
            print("Brukernavn, fornavn, etternavn eller klassekode er ikke korrekt fylt ut!");
        }
    }

include("slutt.html");
        
?>