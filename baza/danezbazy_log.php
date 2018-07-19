<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "klasa";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // łączymy się z bazą danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
//mysql_select_db($baza);

  $wynik = mysqli_query($link,"select * from $tabela")
    or die("Błąd w zapytaniu!");



// wyświetlamy wyniki zapytania
echo "<table border=1>";
    while($rek = mysqli_fetch_assoc($wynik))
	{
        echo "<tr>";
	   $log= $rek['login'];
	   $has= $rek['haslo'];
     $poziom=$rek['poziom'];

       echo "<td>".$log."</td>";
       echo "<td>".$has."</td>";
       echo "<td>".$poziom."</td>";
       echo "</tr>";
    }
echo "</table>";
 mysqli_free_result($wynik);
 mysqli_close($link);
?>
