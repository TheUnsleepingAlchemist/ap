<?php
$plik=fopen("test.txt", "r");
if (!$plik)
print "blad otwarcia pliku";

$i=1;
while (!feof($plik))
  {
  $tab[$i] = fgets($plik,50);
  $i++;
  }
$x=rand(1,6);
echo $tab[$x];
?>
