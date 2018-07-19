<?php
 $plik = fopen("plik.txt","r");
 $licznik = fread($plik,10);
 fclose($plik);
 $licznik++;

 $plik = fopen("plik.txt","w");
 fwrite($plik, $licznik);
 fclose($plik);
 echo $licznik;
?>
