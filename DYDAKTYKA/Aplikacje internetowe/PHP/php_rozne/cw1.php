<form action="" method="POST">
Silnik 16 V B<input type="text" name="zmienna1" value="" >
Cena 150 zł
<input type=submit value="Test PHP">
</form>
<?php
if (isset($_POST['zmienna1']))
{
  echo date('H:i - jS  - F');
  $zmienna1=$_POST['zmienna1'];
  $a=$zmienna1+5;
  echo "<br>wartosc a=$a";
  echo '<br>wartosc a=$a';
  echo '<br>wartosc a='.$a;
  echo "<br>tekst probny";
  print "<br>text z print";
}
else
{
  echo "Wprowadz dane!";
}
?>
