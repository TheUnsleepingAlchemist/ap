<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "krasnal";   // haslo do bazy
$baza   = "mpk";  // nazwa bazy
$tabela = "pracownicy";   // nazwa tabeli

    // ³¹czymy siê z baz¹ danych
if (mysql_connect($serwer, $login, $haslo) and mysql_select_db($baza)) 
 {  // zapytanie do bazy danych
        $wynik = mysql_query("SELECT imie, nazwisko FROM pracownicy")
        or die("B³¹d w zapytaniu!");

        mysql_close();

// wyœwietlamy wyniki zapytania
    while($rek = mysql_fetch_array($wynik)) {
        echo $rek['nazwisko']."<br />";
    }
}
?>
