<?php
$plik=fopen("dane.txt", "w");
if (!$plik)
print "blad otwarcia pliku";
else
print "plik zostal utworzony";
for($i=1;$i<20;$i++)
{$s=$i."\t";
fputs ($plik, $s);
}
fputs($plik, "Koniec wpisu");
fclose($plik);
?>
