<html>
<form action="" method="POST">
a: <input type="text" name="zmienna">
b: <input type="text" name="zmienna2">
<input type="submit" value="Oblicz Sume">
</form>
<?php
if (isset($_POST['zmienna'], $_POST['zmienna2']))
  {$a=$_POST['zmienna'];
   $b=$_POST['zmienna2'];
   $suma=$a+$b;
   echo "Wartosc Sumy $a + $b =". $suma;
  }
else
  echo "wprowadz dane";
?>
</html>
