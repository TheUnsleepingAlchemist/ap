<?php
$suma=0;
$M=array('pokoj' => 30, 'kuchnia' => 12,'korytarz'=>5, 'lazienka'=>15, 'sypialnia'=>16);
  foreach ($M as $nazwa =>$metry)
    { $suma+=$metry;
      $k=max($M);
    }
echo "Największe pomieszczenie ma : $k m<sup>2</sup><br>" ;
echo "Powierzchnia mieszkania wynosi: $suma m<sup>2</sup>";
?>
