<?php

$info = array('kawa', 'br�zowa', 'kofeina');

// Listowanie wszystkich zmiennych
list($nap�j, $kolor, $sk�adnik) = $info;
echo "$nap�j jest $kolor a $sk�adnik czyni j� wyj�tkow�.\n";

// Listowanie niekt�rych element�w
list($nap�j, , $sk�adnik) = $info;
echo "$nap�j zawiera $sk�adnik.\n";

// Albo przeskoczmy od razu do trzeciego
list( , , $sk�adnik) = $info;
echo "Potrzebna jest mi $sk�adnik!\n";

?>