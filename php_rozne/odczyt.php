<h2> Czesci samochodowe - zapisane zam�wienia </h2>
<?php
@ $wp=fopen("zamowienie.txt",'r');
if (!$wp)
      { echo "zam�wienie nie moze byc odczytane 
         w tej chwili";
        exit;
      }
while (!feof($wp))
  {$zamowienie = fgets($wp,10);
  echo $zamowienie. '<br>';
  }
fclose($wp);
?>

