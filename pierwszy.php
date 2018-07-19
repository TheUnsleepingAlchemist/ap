<?php
$zmienna=0;
$imie="Adam";
//$_POST['zmienna']
//$HTTP_POST_VARS['zmienna'];
echo "Good morning $imie";
print '<br>Dzien dobry $imie';
if ($zmienna > 0)
  print '<br>a jest wieksze od 0';
  elseif ($zmienna == 0)
    print '<br>zmienna rowna 0';
else
  print '<br>zmienna mniejsza od 0';

?>
