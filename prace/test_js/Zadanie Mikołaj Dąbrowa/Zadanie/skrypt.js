function test()
{
//Poprawne odpowiedzi
wynik=0;
if(document.getElementById("o2").checked)
wynik++;
if(document.getElementById("o6").checked)
wynik++;
if(document.getElementById("o7").checked)
wynik++;
if(document.getElementById("lista1").value=="c")
wynik++;
if(document.getElementById("o10").checked)
wynik++;
if(document.getElementById("o11").checked)
wynik++;
if(document.getElementById("o13").checked)
wynik++;
if(document.getElementById("o17").checked)
wynik++;
if(document.getElementById("o19").checked)
wynik++;
if(document.getElementById("o26").checked)
wynik++;
if(document.getElementById("o24").checked)
wynik++;
//Złe odpowiedzi
if(document.getElementById("o1").checked)
wynik--;
if(document.getElementById("o3").checked)
wynik--;
if(document.getElementById("o4").checked)
wynik--;
if(document.getElementById("o5").checked)
wynik--;
if(document.getElementById("o8").checked)
wynik--;
if(document.getElementById("o9").checked)
wynik--;
if(document.getElementById("lista1").value=="a")
wynik--;
if(document.getElementById("lista1").value=="b")
wynik--;
if(document.getElementById("o12").checked)
wynik--;
if(document.getElementById("i1").checked)
wynik--;
if(document.getElementById("o14").checked)
wynik--;
if(document.getElementById("o15").checked)
wynik--;
if(document.getElementById("o16").checked)
wynik--;
if(document.getElementById("o18").checked)
wynik--;
if(document.getElementById("o20").checked)
wynik--;
if(document.getElementById("o21").checked)
wynik--;
if(document.getElementById("o27").checked)
wynik--;
if(document.getElementById("o22").checked)
wynik--;
if(document.getElementById("o23").checked)
wynik--;





document.getElementById('wynik').innerHTML=wynik;
}
