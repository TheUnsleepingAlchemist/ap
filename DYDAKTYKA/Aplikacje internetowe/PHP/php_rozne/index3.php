<?php
// utworzenie kr�tkich nazw zmiennych
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$zamowienia = file("c:\\usr\\apache\\httpd\\html\\zamowienie.txt");
$ilosc_zamowien = count($zamowienia);
if ($ilosc_zamowien == 0)
{
  echo '<p><strong>Brak zam�wie�. 
       Prosz� spr�bowa� p�niej.</strong></p>';
}
for ($i=0; $i < $ilosc_zamowien; $i++)
{
  echo $zamowienia[$i].'<br />';
}
?>