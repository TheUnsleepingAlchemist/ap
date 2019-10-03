function test() {
  wynik=0;
  if (document.getElementById('odp1-3').checked)
    wynik++;
  if (document.getElementById('odp2-3').selected)
    wynik++;
  if (document.getElementById('odp3-4').checked)
    wynik++;
    if (document.getElementById('odp3-1').checked)
      wynik--;
      if (document.getElementById('odp3-2').checked)
        wynik--;
        if (document.getElementById('odp3-3').checked)
          wynik--;
  if (document.getElementById('odp4-4').checked)
    wynik++;
  if (document.getElementById('odp5-1').checked)
    wynik++;
  if (document.getElementById('odp5-2').checked)
    wynik++;
  if (document.getElementById('odp5-3').checked)
    wynik++;
      if (document.getElementById('odp5-4').checked)
        wynik--;
  if (document.getElementById('odp6-1').checked)
    wynik++;
  if (document.getElementById('odp7-4').selected)
    wynik++;
  if (document.getElementById('odp8-2').checked)
    wynik++;
  if (document.getElementById('odp9-3').checked)
    wynik--;
  if (document.getElementById('odp9-5').checked)
    wynik--;
      if (document.getElementById('odp9-1').checked)
        wynik++;
          if (document.getElementById('odp9-2').checked)
            wynik++;
              if (document.getElementById('odp9-4').checked)
                wynik++;
                  if (document.getElementById('odp9-6').checked)
                    wynik++;
  if (document.getElementById('odp10-4').selected)
    wynik++;

    document.getElementById('wynik').innerHTML=wynik;
}
