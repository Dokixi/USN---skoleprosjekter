/* Hendelser */

function fokus(element)
{
	element.style.background="yellow";
}

function mistetFokus(element)
{
	element.style.background="white";
}

function musInn(element)
{
	document.getElementById("melding").style.color="blue";
	if(element==document.getElementById("klassekode"))
	{
		document.getElementById("melding").innerHTML="Klassekode skal bestå av 3 tegn, der de to første tegnene er store bokstaver og det siste tegnet er et siffer";
	}

	if(element==document.getElementById("klassenavn"))
	{
		document.getElementById("melding").innerHTML="Skriv inn navnet til klassen din";
	}

	if(element==document.getElementById("brukernavn"))
	{
		document.getElementById("melding").innerHTML="Brukernavn skal bestå av 2 store bokstaver. Den første bokstaven i fornavnet ditt og den første i etternavnet ditt.";
	}

	if(element==document.getElementById("fornavn"))
	{
		document.getElementById("melding").innerHTML="Skriv inn fornavnet ditt";
	}

	if(element==document.getElementById("etternavn"))
	{
		document.getElementById("melding").innerHTML="Skriv inn etternavn ditt";
	}
}

function musUt(element)
{
	document.getElementById("melding").innerHTML="";
}

function settFokus(element)
{
	element.focus();
}