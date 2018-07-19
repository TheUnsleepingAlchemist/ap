<HTML>
<h2> Publikacja News'ów </h2>
  <form action="" method="POST">
    Treść <input type="text" name="tresc" ><br>
    <input type="submit" value="Wyślij">
  </form>
  <br>
<a href="usun_news.php">Usuwanie News</a><br /><br />
<a href="edycja_news.php">Edycja News</a><br /><br />
<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "newsy";   // nazwa tabeli
if (isset($_POST['tresc']))
{
  $autor=$_SESSION['login'];
  $tresc=$_POST['tresc'];
  $polaczenie=mysqli_connect($serwer, $uzytkownik, $dostep, $baza)
    or die("Błąd w połączeniu z serwerem bazy!");

  $wynik=mysqli_query($polaczenie, "insert into newsy (tresc, autor)
  values('$tresc', '$autor')")
    or die("Błąd w zapytaniu!");
echo "........................";

$wynik=mysqli_query($polaczenie, "select * from newsy")
  or die("Błąd w zapytaniu!");
while ($rek=mysqli_fetch_assoc($wynik))
{
  echo "id : ". $rek['id']."<br>";
  echo "Tresć : ". $rek['tresc']."<br>";
  echo "autor : ". $rek['autor']."<br>";
  echo "<br>................................<br>";
}

}
else {
        echo "Wprowadz dane<br>";
    }
?>
</HTML>
