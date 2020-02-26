<html>
<form  action="" method="post">
  Login:<input type="text" name="login" value="">
  Hasło:<input type="text" name="haslo" value="">
  Poziom:<input type="number" name="poziom" value="">
  <input type="submit" name="przycisk" value="Wprowadz">
</form>
<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "klasa";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

@ $login_form=$_POST['login'];
@ $haslo_form=$_POST['haslo'];
@ $poziom_form=$_POST['poziom'];

    // łączymy się z bazą danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
//mysql_select_db($baza);

//wysyłamy do bazy
$wprowadzenie = mysqli_query($link,"insert into user
  values('$login_form', '$haslo_form', '$poziom_form')")
    or die("Błąd w zapytaniu!");

$zapytanie = mysqli_query($link,"select * from user")
      or die("Błąd w zapytaniu!");

// wyświetlamy wyniki zapytania
echo '<form  action="" method="post">
  Login:<input type="text" name="szukaj" value="">
  <input type="submit" name="przycisk" value="Szukaj">
</form>';
@ $szukaj_login=$_POST['szukaj'];
echo "<table border=1>";
    while($rek = mysqli_fetch_assoc($zapytanie))
	{
        echo "<tr>";
        $log= $rek['login'];
  if ($szukaj_login==$log)
       echo "<td>".$log."</td>";
       echo "</tr>";
    }
echo "</table>";
 mysqli_free_result($zapytanie);
 mysqli_close($link);

?>
</html>
