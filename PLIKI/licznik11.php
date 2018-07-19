<?php
 $plik = fopen("plik11.txt" , "r+");
 $licznik = fgets($plik);
 $licznik++;
 fwrite($plik, $licznik);
 fclose($plik);
 echo $licznik;
//zle działa.... dlaczego???? 
?>
