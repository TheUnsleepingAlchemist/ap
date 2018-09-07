<?php
 $plik = fopen("plik.txt" , "r");
 $licznik = fgets($plik);
 fclose($plik);
 $licznik++;
 
 $plik = fopen("plik.txt", "w");
 fwrite($plik, $licznik);
 fclose($plik);
 echo $licznik;
?> 