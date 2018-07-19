<?php
  $suma=0;
  $cena_oleju=12;
  $cena_opon=200;
  echo "zamowienie przyjete <br>";
  echo date('H:i,jS F');
  $opony=$_POST['opony'];
  $olej=$_POST['olej'];
  echo "<br> $opony opony <br>";
  echo "$olej litr/y/ow oleju <br>";
  $suma=$olej * $cena_oleju + $opony *$cena_opon;
  echo "suma zamowienia = $suma zlotych<br>";
  $wpis = date('H:i,jS F') .  "\t" . $opony . "\t-opony \t" . $olej . "\t-olej \n";
  $plik = fopen("zamowienie.txt", 'ab');
    if (!$plik)
      { echo "zam�wienie nie moze byc przyjete w tej chwili";
        exit;
      }

  fwrite($plik, $wpis);
  fclose($plik);
  echo "zamowienie zapisane";
?>
