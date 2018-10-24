<?php
$plik=fopen("dane.txt", "w");
if (!$plik)
print "blad otwarcia pliku";
else
print "plik zostal utworzony";
for($i=1;$i<=5;$i++)
{
$los=rand(10,20);
  $s=$los."\t";
fputs ($plik, $s);
}
fputs($plik, "Koniec wpisu");
fclose($plik);
?>
