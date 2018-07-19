<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "poczta";   // nazwa tabeli

$moj_login=$_SESSION['login'];

  $polaczenie=mysqli_connect($serwer, $uzytkownik, $dostep, $baza)
    or die("Błąd w połączeniu z serwerem bazy!");

  $wynik=mysqli_query($polaczenie, "select od, tresc from poczta where do='$moj_login'")
    or die("Błąd w zapytaniu!");
while ($rek=mysqli_fetch_assoc($wynik))
  {
    echo "Od". $rek['od']."<br>";
    echo "Tresć :". $rek['tresc'];
    echo "<br>................................<br>";
  }
?>
<a href="sprawdz.php">Wyślij pocztę</a>
</HTML>
