<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "krasnal";   // haslo do bazy
$baza   = "transport";  // nazwa bazy
$tabela = "kierowcy";   // nazwa tabeli

    // ³¹czymy siê z baz¹ danych
if (mysql_connect($serwer, $login, $haslo) and     mysql_select_db($baza)) 
 {  // zapytanie do bazy danych
echo "<form method='post'>";
echo "<input type='text' name='naz'>";
echo "</form>";

        $wynik = mysql_query("update ... $naz")
        or die("B³¹d w zapytaniu!");

        mysql_close();

// wyœwietlamy wyniki zapytania
echo "<table border=1>";
    while($rek = mysql_fetch_array($wynik)) {
        echo "<tr>";
	$nazwisko= $rek['nazwisko'];
	$imie= $rek['imie'];
	$adres=$rek['adres']."<br />";
echo "<td>".$nazwisko."</td>";
echo "<td>".$imie."</td>";
echo "</tr>";
    }
echo "</table>";
}
?>
