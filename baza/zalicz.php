<html>
<h2> Samochody</h2>
<form action="" method="POST">
  Numer rejestracyjny:  <input type="text" name="rej" ><br>
  Marka:  <input type="text" name="marka" ><br>
  Model:  <input type="text" name="model" ><br>
  Silnik:  <input type="text" name="silnik" ><br>
  Cena:  <input type="text" name="cena" ><br>
  <input type="submit" value="Zapisz">
</form>
<br>
</html>

<?php
$rej=$_POST['rej'];
$marka=$_POST['marka'];
$model=$_POST['model'];
$silnik=$_POST['silnik'];
$cena=$_POST['cena'];

$serwer = "localhost";  // nazwa serwera mysql
$user  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "samochody";  // nazwa bazy
$tabela = "auta";   // nazwa tabeli

@  $polaczenie=mysqli_connect($serwer, $user, $haslo, $baza)
    or die("Błąd w połączeniu z serwerem bazy!");

$wynik=mysqli_query($polaczenie, "insert into auta (id, marka, model, silnik, cena) values('$rej','$marka', '$model', '$silnik', '$cena')")
      or die("Błąd w zapytaniu!");



$wynik2=mysqli_query($polaczenie, "select * from auta ")
    or die("Błąd w zapytaniu!");

while ($rekord=mysqli_fetch_assoc($wynik2))
  {
    echo "Rejestracja -". $rekord['id']."<br>";
    echo "Marka -". $rekord['marka']."<br>";
    echo "Model -". $rekord['model']."<br>";
    echo "Silnik -". $rekord['silnik']."<br>";
    echo "Cena -". $rekord['cena'];
    echo "<br>................................<br>";
  }
?>
</HTML>
