<?php

session_start(); // można pominąć jeżli jest się pewnym że włączona jest opcja auto_start

if (!isset($_SESSION['cos'])) { // jeżli zmienna nie jest zarejestrowana
    $_SESSION['cos'] = 0;       // przypisz jej początkową wartość
} else {                          // jeżli jest zarejestrowana
    $_SESSION['cos']++;         // zwiększ jej wartość
}

echo 'Strona odczytana '.$_SESSION['cos'].' razy w ciągu tej sesji';

?>
