<?php

/* ajax-klassekode-sok.php */

$angittKlassekode=$_GET["klassekode"];
$filnavn="filer/student.txt";

print ("<table border=0>");    /* starten på tabellen definert */

$filoperasjon="r";  /* filoperasjon ("r" - for lesing) angitt */

$fil = fopen($filnavn,$filoperasjon);    /* filen åpnet */

  while ($linje = fgets ($fil))    /* en linje lest fra fil */
    {
       if ($linje != "")  /* linjen lest fra fil er ikke tom */
        {
          $del = explode (";" , $linje);  /* innholdet av linjen delt opp i  og poststed */
          $brukernavn=trim($del[0]);      /* brukernavn hentet ut */
          $fornavn=trim($del[1]);         /* fornavn hentet ut */
          $etternavn=trim($del[2]);       /* etternavn hentet ut */
          $klassekode=trim($del[3]);      /* klassekode hentet ut */

          if(stripos($klassekode, $angittKlassekode)!==false) /* angittKlassekode finnes på fil */
          {
            print("<tr><td onMouseOver='fokus(this)' onMouseOut='mistetFokus(this)' onClick='velgKlassekode($klassekode)'>$brukernavn $fornavn $etternavn $klassekode </td></tr>");    /* '' = Disse må brukes fordi man kaller på funksjonen fokus inni en print som allerede bruker "" */
          }
        }
    }

  fclose ($fil);    /* filen lukket */

  print("<table>");

  ?>