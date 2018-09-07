<?
$plik=fopen("test.txt", "r");
if (!$plik)
print "b³ad otwarcia pliku";

$i=1;
while (!feof($plik))
  { 
  $tab[$i] = fgets($plik,999);
  $i++;
  }
$x=rand(1,6);
echo $tab[$x];
?>