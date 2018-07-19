<?php
session_start();

if(empty($_SESSION['loggin']))
{
  echo '<h2> Rejestracja nowego użytkownika w oparciu o BAZĘ</h2>
  <form action="" method="POST">
    Login: <input type="text" name="log_form" ><br>
    haslo: <input type="text" name="has_form" ><br>
    poziom: <input type="text" name="poziom" ><br>
    <input type="submit" value="Zarejestruj">
  </form>
  <br>';
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "user";   // nazwa tabeli
if (!empty($_POST['log_form']) && !empty($_POST['has_form']))
{
  $log=$_POST['log_form'];
  $has=$_POST['has_form'];
  $has=sha1($has);
  $poziom=$_POST['poziom'];
  $polaczenie=mysqli_connect($serwer,$uzytkownik,$dostep,$baza)
    or die("Błąd w połączeniu z serwerem bazy!");

  $wynik=mysqli_query($polaczenie, "insert into user (login, haslo, poziom) values('$log', '$has', '$poziom')")
    or die("Błąd w zapytaniu!");
}
else {
        echo "Wprowadz dane<br>";
    }
}


?>
