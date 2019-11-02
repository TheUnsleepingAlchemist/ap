<?php
$A=[1,2,5,1];
$tab=range(10,100,2);
$cars = array
  (
  array(4,22,18),
  array(55,15,13),
  array(66,5,2),
  array(7,17,15)
  );

for ($i=0;$i<4;$i++)
  {for ($k=0;$k<3;$k++)
    echo $cars[$i][$k]." : ";
echo "<br>";
  }

print_r ($tab);
$max=max($A);
$suma=array_sum($A);
echo "Suma= $suma";
echo "Max = $max";
  ?>
