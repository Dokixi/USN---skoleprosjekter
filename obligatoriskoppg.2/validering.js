/* javascript-validering */

function fjernMelding()
{
   document.getElementById("melding").innerHTML="";   
}

function validerRegistrerKlasseSkjema()
{
  var klassekode=document.getElementById("klassekode").value;
  var klassenavn=document.getElementById("klassenavn").value;

  var feilmelding="";

  if (!klassekode)  /* klassekode er ikke fylt ut */
    {
        feilmelding="Klassekode er ikke fylt ut <br />";
    }
  if (!klassenavn)  /* klassenavn er ikke fylt ut */
    {
        feilmelding=feilmelding + "Klassenavn er ikke fylt ut <br />";
    }
	
  if (klassekode && klassenavn)  /* alle felt er fylt ut */
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
}

function validerRegistrerStudentSkjema()
{
  var brukernavn=document.getElementById("brukernavn").value;
  var fornavn=document.getElementById("fornavn").value;
  var etternavn=document.getElementById("etternavn").value;
  var klassekode=document.getElementById("klassekode").value

  var feilmelding="";

  if (!brukernavn)  /* brukernavn er ikke fylt ut */
    {
        feilmelding="Brukernavn er ikke fylt ut <br />";
    }
  if (!fornavn)  /* fornavn er ikke fylt ut */
    {
        feilmelding=feilmelding + "Fornavn er ikke fylt ut <br />";
    }
  if (!etternavn)  /* etternavn er ikke fylt ut */
    {
        feilmelding=feilmelding + "Etternavn er ikke fylt ut <br />";
    }
  if (!klassekode) /* klassekode er ikke fylt ut */
  	{
  		feilmelding=feilmelding + "Klassekode er ikke fylt ut <br />";
  	}
	
  if (brukernavn && fornavn && etternavn && klassekode)  /* alle felt er fylt ut */
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
}

function validerKlasselisteSkjema()
{
  var klassekode=document.getElementById("klassekode").value;

  var feilmelding="";

  if (!klassekode)  /* klassekode er ikke fylt ut */
    {
        feilmelding="Klassekode er ikke fylt ut <br />";
    }
  if (klassekode)  /* alle felt er fylt ut */
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";	
        document.getElementById("melding").innerHTML=feilmelding;	
        return false;
    }	
}