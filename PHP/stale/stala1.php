<?php
define("cena", "50");
$suma=1000+cena;
echo "Wartosc=$suma <br>" ;

$x=1;
$k= --$x + --$x + $x++ - ++$x;  // 1
echo "x=".$x."<br>";
echo "obliczenia: ".$k;
?>
