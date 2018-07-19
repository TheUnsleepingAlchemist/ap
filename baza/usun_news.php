<HTML>
<h2> Usuwanie News'ów </h2>
  <form action="" method="POST">
    id newsa:  <input type="text" name="id" ><br>
    <input type="submit" value="Usuń">
  </form>
  <br>

<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "newsy";   // nazwa tabeli
if (isset($_POST['id']))
{
  $autor=$_SESSION['login'];
  $id=$_POST['id'];
  $polaczenie=mysqli_connect($serwer, $uzytkownik, $dostep, $baza)
    or die("Błąd w połączeniu z serwerem bazy!");

  $wynik=mysqli_query($polaczenie, "delete from newsy where id='$id'")
    or die("Błąd w zapytaniu!");
echo "........................<br>";

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
