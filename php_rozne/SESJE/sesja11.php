<?php

session_start(); // można pominšć jeli jest się pewnym że włšczona jest opcja auto_start

if (!isset($_SESSION['count'])) { // jeli zmienna nie jest zarejestrowana
    $_SESSION['count'] = 0;       // przypisz jej poczštkowš wartoć
} else {                          // jeli jest zarejestrowana
    $_SESSION['count']++;         // zwiększ jej wartoć
}

echo 'Strona odczytana '.$_SESSION['count'].' razy w cišgu tej sesji';

?>
