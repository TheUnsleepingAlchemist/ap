<html>
<form action="" method="POST">
Zakres:<br>
A: <input type="txt" name="a">
B: <input type="txt" name="b"><br>
<input type="submit" name="s" value="suma">
<input type="submit" name="m" value="mnozenie">
<input type="submit" name="d" value="dziel">
<input type="submit" name="o" value="odejmij">
</form>

<?php

function suma($a,$b)
{
  return $a+$b;
}
echo suma(30,15);
?>
</html>
