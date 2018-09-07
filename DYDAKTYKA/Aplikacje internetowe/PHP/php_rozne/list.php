<?php

$info = array('kawa', 'br¹zowa', 'kofeina');

// Listowanie wszystkich zmiennych
list($napój, $kolor, $sk³adnik) = $info;
echo "$napój jest $kolor a $sk³adnik czyni j¹ wyj¹tkow¹.\n";

// Listowanie niektórych elementów
list($napój, , $sk³adnik) = $info;
echo "$napój zawiera $sk³adnik.\n";

// Albo przeskoczmy od razu do trzeciego
list( , , $sk³adnik) = $info;
echo "Potrzebna jest mi $sk³adnik!\n";

?>