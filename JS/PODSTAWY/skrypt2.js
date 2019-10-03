function widok()
{
  document.getElementById('pokaz').innerHTML="<b>Tekst pokazowy</b>";
}

function oblicz()
{
  zmienna=document.getElementById('pole1').value;
  zmienna=zmienna*1000;
  document.getElementById('pole2').value=zmienna;
  document.getElementById('pokaz2').innerHTML=zmienna;
}

function pola()
{
  zmienna1=document.getElementById('r1').checked;
  zmienna2=document.getElementById('r2').checked;
    if (zmienna1)
      document.getElementById('wynik').innerHTML="Jesteś mężczyzną";
    else if (zmienna2)
      document.getElementById('wynik').innerHTML="Jesteś kobietą";
    else
      document.getElementById('wynik').innerHTML="Zaznacz opcję";
}
