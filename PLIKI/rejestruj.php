<h2> Rejestracja w oparciu o pliki </h2>
<form action="" method="POST">
  Login: <input type="txt" name="log" ><br>
  haslo" <input type="txt" name="has" ><br>
  <input type="submit" value="Rejestruj">
</form>

<?php
if (isset($_POST['log'],$_POST['has']))
{
  $log=$_POST['log'];
  $has = $_POST['has'];

  $wp = fopen("baza.txt", "a");
  fputs($wp,$log . ":" . $has . "\n");
  fclose($wp);
  echo "Uzytkownik $log zarejestrowany/a";
}
else {
echo "Wprowadz nowego uzytkownika";
}
?>
