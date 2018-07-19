<html>
<form action="" method="POST">
Liczba:<br>
A: <input type="txt" name="a">
<input type="submit" value="Oblicz silnie">
</form>
<?php
if (isset($_POST['a']) && $_POST['a']>0)
{
    $a=$_POST['a'];
    $pom=$a;
    $S=1;
    while ($a>0)
      {$S*=$a;
        $a--;
      }
echo "Silnia z liczby $pom! = $S";
}
else
{
echo "Wprowadz dane";
}
?>
</html>
