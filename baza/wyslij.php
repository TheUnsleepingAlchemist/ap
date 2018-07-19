<HTML>
<h2> Wysyłanie poczty </h2>
  <form action="" method="POST">
    Do: <input type="text" name="do" ><br>
    Treść: <input type="text" name="tresc" ><br>
    <input type="submit" value="Wyślij">
  </form>
  <br>

<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "poczta";   // nazwa tabeli
if (!empty($_POST['do']) && !empty($_POST['tresc']))
{
  $do=$_POST['do'];
  $od=$_SESSION['login'];
  $tresc=$_POST['tresc'];
  $polaczenie=mysqli_connect($serwer, $uzytkownik, $dostep, $baza)
    or die("Błąd w połączeniu z serwerem bazy!");

  $wynik=mysqli_query($polaczenie, "insert into poczta (od, do, tresc)
  values('$od','$do', '$tresc')")
    or die("Błąd w zapytaniu!");
}
else {
        echo "Wprowadz dane<br>";
    }
?>
<br />
<a href="sprawdz.php">Sprawdz poczte</a>
</HTML>
