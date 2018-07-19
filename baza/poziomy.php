<?php
session_start();
// parametry serwera
if ($_SESSION['loggin']==1)
  {echo "Jesteś zalogowany jako ".$_SESSION['login']."<br />";
  }
  echo "<a href=logowanie.php>Zaloguj się</a>";
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "klasa";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

// łączymy się z bazą danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
//wysyłamy zapytanie do bazy
$wynik = mysqli_query($link,"select * from $tabela where poziom=2")
    or die("Błąd w zapytaniu!");

// wyświetlamy wyniki zapytania

    while($rek = mysqli_fetch_assoc($wynik))
	  {
	   $log= $rek['login'];
	   $has= $rek['haslo'];
     $poziom=$rek['poziom'];
       echo $log. " - ". $has." - " . $poziom. "<br>";
    }
echo '<form action="" method="POST">
<input type="submit" name="wyloguj" value="Wyloguj">
</form>';
if (isset($_POST['wyloguj']))
   { if ($_SESSION['loggin']==1)
        session_destroy();
        header('location: logowanie.php');
    }

 mysqli_free_result($wynik);
 mysqli_close($link);
?>
