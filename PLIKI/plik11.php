<?php
$plik=fopen("dane.txt", "r");
if (!$plik)
print "blad otwarcia pliku";

$str=fgets($plik,999);
echo $str;
