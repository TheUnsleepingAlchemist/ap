function test()
{
  wynik=0;
  if (document.getElementById('odp3').checked)
    wynik++;
  if (document.getElementById('odp8').selected)
    wynik++;
  if (document.getElementById('odp13').checked)
    wynik++;
  if (document.getElementById('odp17').checked)
    wynik++;
  if (document.getElementById('odp19').checked)
    wynik++;
  if (document.getElementById('odp22').checked)
    wynik++;
  if (document.getElementById('odp29').selected)
    wynik++;
  if (document.getElementById('odp32').checked)
    wynik++;
  if (document.getElementById('odp37').checked)
    wynik++;
  if (document.getElementById('odp39').checked)
    wynik++;
      if (document.getElementById('odp35').checked)
        wynik--;
          if (document.getElementById('odp36').checked)
            wynik--;
              if (document.getElementById('odp38').checked)
                wynik--;
                  if (document.getElementById('odp40').checked)
                    wynik--;
  if (document.getElementById('odp43').selected)
    wynik++;

    document.getElementById('wynik').innerHTML=wynik;
}
