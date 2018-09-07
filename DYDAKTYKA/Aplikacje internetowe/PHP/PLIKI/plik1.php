<?php
$plik=fopen("dane.txt", "ab");
if (!$plik)
print "b³ad otwarcia pliku";
else
print "plik zosta³ utworzony";
for($i=1;$i<20;$i++)
{$s=$i."\t";
fputs ($plik, $s);
}

fclose($plik);
?>

