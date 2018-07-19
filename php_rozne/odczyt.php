<h2> Czesci samochodowe - zapisane zamówienia </h2>
<?php
@ $wp=fopen("zamowienie.txt",'r');
if (!$wp)
      { echo "zamówienie nie moze byc odczytane 
         w tej chwili";
        exit;
      }
while (!feof($wp))
  {$zamowienie = fgets($wp,10);
  echo $zamowienie. '<br>';
  }
fclose($wp);
?>

