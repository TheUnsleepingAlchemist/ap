<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // łączymy się z bazą danych
mysql_connect($serwer, $login, $haslo);
mysql_select_db($baza);

        $wynik = mysql_query("select * from $tabela")
        or die("Błąd w zapytaniu!");
        mysql_close();
// wyświetlamy wyniki zapytania
$wynik2=mysql_fetch_array($wynik);
//echo $wynik2;
foreach ($wynik2 as $klucz => $wartosc) {
echo "$klucz : $wartosc <br />";
}
?>