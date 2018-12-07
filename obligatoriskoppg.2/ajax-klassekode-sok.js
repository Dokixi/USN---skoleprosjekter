/* ajax-søk-og-velg */


function fjernMelding()
{
   document.getElementById("melding").innerHTML="";   
}  


function vis(klassekode)
{
  var foresporsel=new XMLHttpRequest();  /* oppretter request-objekt */
  
  foresporsel.onreadystatechange=function() 
    {
      if (foresporsel.readyState==4 && foresporsel.status==200)  /* responsen er fullført og vellykket */
        {
          document.getElementById("melding").innerHTML=foresporsel.responseText;  /* responsteksten legges i meldingsfeltet */
        }
    }

  foresporsel.open("GET","ajax-klassekode-sok.php?klassekode="+klassekode);  /* angir metode og URL */
  foresporsel.send();  /* sender en request */
}


function fokus(element)
{
   element.style.background="yellow";
}  


function mistetFokus(element)
{
   element.style.background="white";
}  


function velgKlassekode(klassekode)
{
    document.getElementById("klassekode").value=klassekode;
    fjernMelding();
}  