<!DOCTYPE html>
<html>
<head></head>
<body>
  <form action="" method="POST">
    >>>>>>Logowanie:<br>
    Login:<input type="text" name="login"><br>
    hasło:<input type="password" name="haslo"><br>
    <input type="submit" value="Zaloguj">
  </form>

<?php
$A=array('ako' => 'ako1234', 'basia' => 'klasa','jan'=>'jan1234');
if (isset($_POST['login'],$_POST['haslo']))
{
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$k=0;
  foreach ($A as $log =>$has)
    if ($log==$login && $has==$haslo)
      {header("Location: profil.php");
      $k=1;
      }
if ($k==0)
  echo "Błędny login lub haslo";
}
else {
  echo "Wprowadz dane logowania";
}
?>
</body>
</html>
