<HTML>
<?php
$serwer = "localhost";  // nazwa serwera mysql
$uzytkownik  = "root";      // login do bazy
$dostep  = "";   // haslo do bazy
$baza   = "blog";  // nazwa bazy
$tabela = "newsy";   // nazwa tabeli
$polaczenie=mysqli_connect($serwer, $uzytkownik, $dostep, $baza)
  or die("Błąd w połączeniu z serwerem bazy!");

$wynik=mysqli_query($polaczenie, "select * from newsy")
  or die("Błąd w zapytaniu!");
while ($rek=mysqli_fetch_assoc($wynik))
{
  echo "id : ". $rek['id']."<br>";
  echo "Tresć : ". $rek['tresc']."<br>";
  echo "autor : ". $rek['autor']."<br>";
  echo "<br>................................<br>";
}
?>

<h2> Edycja News </h2>
  <form action="" method="POST">
    id newsa:  <input type="text" name="id" ><br>
    Edycja:  <input type="text" name="tresc" ><br>
    <input type="submit" value="Edytuj">
  </form>
  <br>

<?php
session_start();
if (isset($_POST['id']))
{
  $autor=$_SESSION['login'];
  $id=$_POST['id'];
  $tresc=$_POST['tresc'];
  $wynik=mysqli_query($polaczenie, "update newsy set tresc='$tresc'
  where id='$id'")
    or die("Błąd w zapytaniu!");
echo "........................<br>";

}
else {
        echo "Wprowadz dane<br>";
    }
?>
</HTML>
