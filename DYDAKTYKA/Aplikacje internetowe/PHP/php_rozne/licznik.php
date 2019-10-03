<?php
 @$plik = fopen("plik.txt" , "r");
if ($plik)
  { $licznik = fgets($plik);
    fclose($plik);
    $licznik++;
  }
else
  { $plik = fopen("plik.txt" , "w");
    $licznik=1;
    fwrite($plik, $licznik);
  }

 $plik = fopen("plik.txt", "w");
 fwrite($plik, $licznik);
 fclose($plik);
 echo "Odwiedziles ta strone :". $licznik;
?>
