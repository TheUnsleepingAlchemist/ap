<form class=""  method="post">
  <input type="submit" name="button" value="Wyloguj">
</form>

<?php
@$wyloguj=$_POST['button'];
session_start();
if (isset($_SESSION['login']))
{
  $login=$_SESSION['login'];
  echo "<h1>"."zalogowano porawnie jako ".$login."</h1>"."<br>".
  "<h2>"."Witaj na stronie.... ".$login." tralalalalal".
  "</h2>";
}
if ($wyloguj)
{session_destroy();
  header ('Location:sesje.php');}
?>
