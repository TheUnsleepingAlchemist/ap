<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // ��czymy si� z baz� danych
mysql_connect($serwer, $login, $haslo);
mysql_select_db($baza);

        $wynik = mysql_query("select * from $tabela")
        or die("B��d w zapytaniu!");
        mysql_close();

// wy�wietlamy wyniki zapytania
echo "<table border=1>";
    while($rek = mysql_fetch_array($wynik)) 
	{
        echo "<tr>";
	   $log= $rek['login'];
	   $has= $rek['haslo']."<br />";

       echo "<td>".$log."</td>";
       echo "<td>".$has."</td>";
       echo "</tr>";
    }
echo "</table>";
?>
