<form  action="" method="post">
  <input type="submit" name="wy" value="Wyloguj">
</form>

<?php
@$wyloguj=$_POST['wy'];
session_start();

if (isset($_SESSION['login']))
 {$login=$_SESSION['login'];
  echo "Jestes zalogowany jako:  ".$login;
 }
if ($wyloguj=='Wyloguj')
  {//session_destroy();
    $_SESSION['zaloguj']=0;
    header('Location:sesja0.php');
  }

?>
