<?php
$A[0]=20;
$A[1]=10;
$A[]=35;
echo "Tablica -> $A[0], $A[1]<br>";
$B=[1,4,6,2,19,5,8,1,-2,10,20,-13];
$suma=0;
for ($i=0;$i<count($B);$i++)
    $suma+=$B[$i];
echo "Srednia= ". $suma/count($B) ;

?>
