<?php
session_start();

if(empty($_SESSION['loggin']))
{
  echo '<h2> Logowanie w oparciu o BAZĘ</h2>
  <form action="" method="POST">
    Login: <input type="text" name="log_form" ><br>
    haslo" <input type="text" name="has_form" ><br>
    <input type="submit" value="Zaloguj">
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
  $polaczenie=mysqli_connect($serwer,$uzytkownik,$dostep,$baza)
    or die("Błąd w połączeniu z serwerem bazy!");
  $wynik=mysqli_query($polaczenie, "select * from $tabela");
  while($rek = mysqli_fetch_assoc($wynik))
    {
      $login= $rek['login'];
      $haslo= $rek['haslo'];
        if ($log==$login && $has==$haslo)
          { $_SESSION['loggin']=1;
            $_SESSION['login']=$login;
            header('location: wyslij.php');
          }
    }
if ($_SESSION['loggin']!=1)
echo "Nie zalogowałeś się <br />";
}

else {
  echo "Wprowadz dane logowania<br>";
}
}
else {
  echo "Jesteś zalogowany jako ".$_SESSION['login'];
}
echo "<a href='rejestracja.php'> Rejestracja nowego uzytkownika</a>";
?>
