<html>
<head>

</head>
<body>
<center>
<h2>Auta - wprowadzanie i wyszukiwanie</h2>
<form action="" method="POST">
Marka:<input type="text" name="nazwa1"><br /><br /><br />
Model:<input type="text" name="nazwa2"><br /><br /><br />
Rocznik:<input type="text" name="nazwa3"><br /><br /><br />
Cena:<input type="number" name="nazwa4"><br /><br /><br />
<input type="submit" name="nazwa5" value="Wprowadź!">
</form>
<hr />
<form action="" method="POST">
Rocznik<=<input name="wysz1" type="text">
Cena<=<input name="wysz2" type="text">
<input type="submit" value="Szukaj!">
</form>
<?php
if(isset($_POST['nazwa1'], $_POST['nazwa2'], $_POST['nazwa3'], $_POST['nazwa4']))
{
$n1=$_POST['nazwa1'];
$n2=$_POST['nazwa2'];
$n3=$_POST['nazwa3'];
$n4=$_POST['nazwa4'];
$plik=fopen("auta.txt", "a+");
$cars=($n1.":".$n2.":".$n3.":".$n4."\r\n");
fputs($plik, $cars);
}
// WYSZUKIWANIE

$r=$_POST['wysz1'];
$c=$_POST['wysz2'];

$tab=file("auta.txt", FILE_IGNORE_NEW_LINES);
foreach ($tab as $line)
{
  if(empty($cars))
  {
    list ($n1, $n2, $n3, $n4)=explode(":", $line);
    if($r>=$n3 && $c>=$n4)
    echo ($n1."-".$n2."-".$n3."-".$n4."\r\n"."<br />");

  }
  else
  {
	  echo "Nie podałeś danych!";
  }
}

?>



</center>
</form>
</body>
</html>
