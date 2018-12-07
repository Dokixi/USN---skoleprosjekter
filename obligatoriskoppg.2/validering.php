<?php   /* php-validering */

function validerKlassekode($klassekode)
{

$lovligKlassekode=true;

  if (!$klassekode)  /* klassekode er ikke fylt ut */
    {
      $lovligKlassekode=false;
    }

  else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
    {
      $lovligKlassekode=false;
    }

  else 
    {
      $tegn1=$klassekode[0];   /* første tegn i klassekoden  */
      $tegn2=$klassekode[1];   /* andre tegn i klassekoden  */
      $tegn3=$klassekode[2];   /* tredje tegn i klassekoden  */

      if (!ctype_upper($tegn1))  /* tegn1 er ikke stor bokstav */ 
        {
          $lovligKlassekode=false;
        }
		
      if (!ctype_upper($tegn2))  /* tegn2 er ikke stor bokstav */
        {
          $lovligKlassekode=false;
        }
		
      if (!ctype_digit($tegn3))  /* tegn3 er ikke et siffer */ 
        {
          $lovligKlassekode=false;
        }
    }
    return $lovligKlassekode;
} /* Slutt på funksjon validerKlassekode */

function validerKlassenavn($klassenavn)
{
  $lovligKlassenavn=true;

  if(!$klassenavn) /* fagnavn er ikke fylt ut */
  {
    $lovligKlassenavn=false;
  }

  return $lovligKlassenavn;
}   /* Slutt på funksjon validerKlassenavn */

function validerBrukernavn($brukernavn)
{
  $lovligBrukernavn=true;

  if(!$brukernavn)
  {
    $lovligBrukernavn=false;
  }

  else if (strlen($brukernavn)!=2)  /* brukernavn består ikke av 2 tegn */
  {
    $lovligBrukernavn=false;
  }

  else
  {
    $tegn1=$brukernavn[0];   /* første tegn i brukernavnet  */
    $tegn2=$brukernavn[1];   /* andre tegn i brukernavnet  */

    if (!ctype_upper($tegn1))  /* tegn1 er ikke stor bokstav */ 
        {
          $lovligBrukernavn=false;
        }
    
      if (!ctype_upper($tegn2))  /* tegn2 er ikke stor bokstav */
        {
          $lovligBrukernavn=false;
        }
  }

  return $lovligBrukernavn;
} /* Slutt på funksjon validerBrukernavn */

function validerFornavn($fornavn)
{
  $lovligFornavn=true;

  if(!$fornavn) /* fagnavn er ikke fylt ut */
  {
    $lovligFornavn=false;
  }

  return $lovligFornavn;
}   /* Slutt på funksjon validerFornavn */

function validerEtternavn($etternavn)
{
  $lovligEtternavn=true;

  if(!$etternavn) /* fagnavn er ikke fylt ut */
  {
    $lovligEtternavn=false;
  }

  return $lovligEtternavn;
}   /* Slutt på funksjon validerEtternavn */

?>