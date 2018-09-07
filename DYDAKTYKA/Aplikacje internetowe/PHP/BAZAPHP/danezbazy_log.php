<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // ³¹czymy siê z baz¹ danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
//mysql_select_db($baza);

  $wynik = mysqli_query($link,"select * from $tabela")
    or die("B³¹d w zapytaniu!");
 


// wyœwietlamy wyniki zapytania
echo "<table border=1>";
    while($rek = mysqli_fetch_assoc($wynik)) 
	{
        echo "<tr>";
	   $log= $rek['login'];
	   $has= $rek['haslo']."<br />";

       echo "<td>".$log."</td>";
       echo "<td>".$has."</td>";
       echo "</tr>";
    }
echo "</table>";
 mysqli_free_result($wynik);   
 mysqli_close($link);
?>
