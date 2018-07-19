<html>
<form action="" method="POST">
Zakres:<br>
A: <input type="txt" name="a">
B: <input type="txt" name="b">
<input type="submit" value="Wykonaj">
</form>
<?php
if (isset($_POST['a'], $_POST['b']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $pom=$a;
    $suma=0;
  for ( ;$a<$b; $a++)
    $suma+=$a;
    echo "Suma liczb z przedzialu od $pom do $b wynosi $suma";
}
else
{
echo "Wprowadz dane";
}
?>
</html>
