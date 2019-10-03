<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="" method="post">
        Imie<input type="text" name="imie" value=""><br>
        Nazwisko<input type="text" name="nazwisko" value=""><br>
        Adres<input type="text" name="adres" value=""><br>
        <input type="submit" name="" value="Wstaw rekord">
      </form>
      <hr>


<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "4ti";  // nazwa bazy
    // Laczymy sie z baza danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
if (isset($_POST['imie'],$_POST['nazwisko'],$_POST['adres']))
{
  $imie=$_POST['imie'];
  $nazwisko=$_POST['nazwisko'];
  $adres=$_POST['adres'];
  $nowy=mysqli_query($link, "INSERT INTO uczen VALUES(NULL,'$imie', '$nazwisko', '$adres')");
}
$wynik = mysqli_query($link,"select * from uczen")
    or die("Blad w zapytaniu!");

// wyswietlamy wyniki zapytania

echo "<table border='1'>";
    while($rek = mysqli_fetch_assoc($wynik))
	   {
        $id=$rek['id_u'];
	      $imie= $rek['imie'];
	      $nazwisko= $rek['Nazwisko'];
        $adres=$rek['Adres'];
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$imie."</td>";
        echo "<td>".$nazwisko."</td>";
        echo "<td>".$adres."</td>";
        echo "</tr>";
     }
echo "</table>";

echo "<form method='POST'>
      <input type='text' name='szukaj'>
      <input type='submit' value='Szukaj'>
</form>
";

$szukaj=$_POST['szukaj'];
//inna metoda
$dane=mysqli_query($link, "SELECT * FROM uczen WHERE imie='$szukaj'");
echo "<table>";
while($rek = mysqli_fetch_assoc($dane))
{
  $id=$rek['id_u'];
  $imie= $rek['imie'];
  $nazwisko= $rek['Nazwisko'];
  $adres=$rek['Adres'];
  echo "<tr>";
  echo "<td>".$id."</td>";
  echo "<td>".$imie."</td>";
  echo "<td>".$nazwisko."</td>";
  echo "<td>".$adres."</td>";
  echo "</tr>";
}
echo "</table>";

echo "<form method='POST'>
      Podaj id ucznia do usuniecia <input type='text' name='usun'>
      <input type='submit' value='Usun'>
      </form>";
$id_ucznia=$_POST['usun'];
mysqli_query($link, "delete from uczen where id_u='$id_ucznia'");


 mysqli_free_result($wynik);
 mysqli_close($link);
?>
<!-- UPDATE tabela SET pole = 'nowa_wartosc' WHERE pole = 'szukana_wartosc' -->
</body>
</html>
