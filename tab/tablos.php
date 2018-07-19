<?php
for ($i=0;$i<5;$i++)
  $A[$i]=rand(1,10);
sort($A);
$licz=0;
for ($k=0;$k<5;$k++)
  {echo 'A['.$k.']='.$A[$k].'<br>';
    if ($A[$k]==5)
     $licz++;
  }
echo "wartosc 5 powtorzyla sie $licz raz/y";
?>
