<?php
  $suma=0;
  $cena_oleju=12;
  $cena_opon=200;
//  if (isset()
  echo "zamówienie przyjête <br>";
  echo date('H:i,jS F');
  echo "<br>$opony opony <br>";
  echo "$olej litr/y/ów oleju <br>";
  $suma=$olej * $cena_oleju + $opony *$cena_opon;
  echo "suma zamówienia = $suma z³otych<br>";
  $wpis = date('H:i,jS F') .  "\t" . $opony . "\t-opony \t" . $olej . "\t-olej \n";
  $plik = fopen("zamowienie.txt", 'ab');
    if (!$plik)
      { echo "zamówienie nie moze byc przyjete w tej chwili";
        exit;
      }

  fwrite($plik, $wpis);
  fclose($plik);
  echo "zamowienie zapisane";     
?>