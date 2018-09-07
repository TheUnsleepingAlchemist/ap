<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "student";  // nazwa bazy
$tabela = "student";   // nazwa tabeli
// łączymy się z bazą danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);

  $wynik = mysqli_query($link,"select * from $tabela where nazwisko=$naz")
    or die("Błąd w zapytaniu!");
 
while($rek = mysqli_fetch_assoc($wynik)) 
	{echo "$rek['nazwisko']";
	 echo "$rek['imie']";
	};




?>