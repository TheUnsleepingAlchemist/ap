function calc()
{
  wynik=0
  if (document.getElementById('css1').checked)
  wynik++;
  if (document.getElementById('bin2').checked)
  wynik++;
  if (document.getElementById('win2').checked)
  wynik++;
  if (document.getElementById('ram1').checked)
  wynik++;
  if (document.getElementById('dys1').checked)
  wynik++;
  if (document.getElementById('urz1').checked)
  wynik++;
  if (document.getElementById('lista1').value=="d")
  wynik++;
  if (document.getElementById('gra3').checked)
  wynik++;
  if (document.getElementById('bil3').checked)
  wynik++;
  if (document.getElementById('kla1').checked)
  wynik++;
  if (document.getElementById('kla2').checked)
  wynik--;
  if (document.getElementById('kla3').checked)
  wynik--;
  if (document.getElementById('kla4').checked)
  wynik++;


  document.getElementById("wynik").innerHTML="Twój wynik to " +wynik+ " punktów na 11 możliwych.";


}
