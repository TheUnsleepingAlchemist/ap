<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // ³¹czymy siê z baz¹ danych
if (mysql_connect($serwer, $login, $haslo) and     mysql_select_db($baza)) 
 {  // zapytanie do bazy danych
echo "<form method='post'>";
echo "Login:";
echo "<input type='text' name='log'> <BR />";
echo "Haslo:";
echo "<input type='text' name='has'> <BR />";
echo "<input type='submit' name='przycisk' value='Wprowadz'> <BR /> ";
echo "</form>";
$a=$_POST['log'];
$b=$_POST['has'];
        $wynik2 = mysql_query("insert into $tabela values('$a','$b')")
        or die("B³¹d w zapytaniu!");
        
		$wynik = mysql_query("select * from $tabela")
        or die("B³¹d w zapytaniu!");
		
		mysql_close();

// wyœwietlamy wyniki zapytania

echo "<p align='center'>";
echo "Wynik zapytania do tabeli";

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
echo "</p>";
}
?>
