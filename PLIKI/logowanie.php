<h2> Logowanie w oparciu o pliki </h2>
<form action="" method="POST">
  Login: <input type="txt" name="log_form" ><br>
  haslo" <input type="txt" name="has_form" ><br>
  <input type="submit" value="Zaloguj">
</form>
<br>
<?php
if (isset($_POST['log_form'],$_POST['has_form']))
{
$log_form=$_POST['log_form'];
$has_form=$_POST['has_form'];

$tab=file("baza.txt", FILE_IGNORE_NEW_LINES);

foreach ($tab as $line)
{
  list ($user, $pass)=explode(":",$line);
    if ($user==$log_form && $pass==$has_form)
      if ($log_form=="admin")
       header ("location: realizacja.php");
    else
    {
      header ("location: zamowienie.php");
    }
}
}
else {
  echo "Wprowadz dane logowania<br>";
}
echo "<a href='rejestruj.php'> Rejestracja nowego uzytkownika</a>";
?>
