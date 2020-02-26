var zmienna=20;
var text="Witaj swiecie";
var liczba=23.31e+4;
document.write("To moje zmienne:<br>");
document.write(zmienna + "<br>");
document.write(text);
document.write("<br>" + liczba );
function suma()
    { var a=20;
      var b=50;
      document.write("Tak działa funkcja<br>");
      suma=a+b;
      document.write("Suma="+suma);
    }

  if (zmienna<10)
    document.write("<br>warunek 1 spełniony");
  else if (zmienna<30)
    document.write("<br>warunek 2 spełniony");
  else if (zmienna=50)
    document.write("<br>warunek 3 spełniony "+zmienna);
wybor=2;
switch(wybor)
{
  case 1: document.write("<br>opcja 1");break;
  case 2: document.write("<br>opcja 2");break;
  default: document.write("<br>wybierz coś");
}

//instrukcje iteracyjne (pętle)
x=1;
while (x<=20)
  {
    document.write("<br>Lublę programować");
    x++;
  }

z=0;
do
  {z++;
  document.write("<br>pętla do-while");
  }
while (z<5);

for (i=0; i<5; i++)
  {
    if(i==2)
      continue;

    document.write("<br>pętla  for");
  }
