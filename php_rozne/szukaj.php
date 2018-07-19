<?
$plik=fopen("zamowienie.txt", "r");
if (!$plik)
print "b³ad otwarcia pliku";


//for($i=1;$i<20;$i++)
fseek($plik, 80);
print fgets ($plik, 500);
fclose($plik);
?>

