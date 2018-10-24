<?php
$plik=fopen("dane.txt", "ab");
if (!$plik)
print "bład otwarcia pliku";
else
print "plik został utworzony";
for($i=1;$i<20;$i++)
{$s=$i."\t";
fputs ($plik, $s);
}

fclose($plik);
?>
