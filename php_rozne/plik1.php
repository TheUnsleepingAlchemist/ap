<?php
$plik=fopen("dane.txt", "ab");
if (!$plik)
print "b�ad otwarcia pliku";
else
print "plik zosta� utworzony";
for($i=1;$i<20;$i++)
{$s=$i."\t";
fputs ($plik, $s);
}

fclose($plik);
?>

