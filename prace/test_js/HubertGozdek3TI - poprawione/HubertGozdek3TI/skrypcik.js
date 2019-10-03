function calc()
{
wynik=0
if (document.getElementById('css1').checked)
  wynik++;
  if (document.getElementById('css2').checked)
    wynik-1;
    if (document.getElementById('css3').checked)
      wynik-1;
if (document.getElementById('hdd2').checked)
  wynik++;
  if (document.getElementById('hdd3').checked)
    wynik-1;
    if (document.getElementById('hdd1').checked)
      wynik-1;
if (document.getElementById('zip3').checked)
  wynik++;
  if (document.getElementById('zip2').checked)
    wynik-1;
    if (document.getElementById('zip1').checked)
      wynik-1;
if (document.getElementById('p2').checked)
  wynik++;
  if (document.getElementById('p3').checked)
    wynik-1;
    if (document.getElementById('p1').checked)
      wynik-1;
if (document.getElementById('lista1').value=='d')
  wynik++;
  if (document.getElementById('lista1').value=='c')
    wynik-1;
    if (document.getElementById('lista1').value=='b')
      wynik-1;
      if (document.getElementById('lista1').value=='a')
        wynik-1;
if (document.getElementById('q1').checked)
  wynik++;
  if (document.getElementById('q2').checked)
    wynik-1;
    if (document.getElementById('q3').checked)
      wynik-1;
if (document.getElementById('w3').checked)
  wynik++;
if (document.getElementById('w1').checked)
    wynik++;
    if (document.getElementById('w2').checked)
      wynik-1;
      if (document.getElementById('w4').checked)
        wynik-1;
if (document.getElementById('e1').checked)
  wynik++;
  if (document.getElementById('e2').checked)
    wynik-1;
    if (document.getElementById('e3').checked)
      wynik-1;
if (document.getElementById('r2').checked)
  wynik++;
  if (document.getElementById('r3').checked)
    wynik-1;
    if (document.getElementById('r1').checked)
      wynik-1;
if (document.getElementById('l2').checked)
  wynik++;
  if (document.getElementById('l3').checked)
    wynik-1;
    if (document.getElementById('l1').checked)
      wynik-1;

  document.getElementById('wynik').innerHTML=wynik;

}
