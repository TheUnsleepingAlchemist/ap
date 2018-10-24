<html>
<body>
<form method="post">
 <p>Marka: <input type="text" name="marka" /></p>
 <p>Model: <input type="text" name="model" /></p>
 <p>Rocznik: <input type="text" name="rocznik" /></p>
  <p>Cena: <input type="text" name="cena" /></p>
 <p><input type="submit" /></p>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);


if (isset($_POST['marka'], $_POST['model'], $_POST['rocznik'], $_POST['cena']))
{
	$marka=$_POST['marka'];
	$model=$_POST['model'];
	$rocznik=$_POST['rocznik'];
	$cena=$_POST['cena'];
		$plik=fopen("baza.txt", "a");
		$produkt=$marka.":".$model.":".$rocznik.":".$cena."\n";
		fputs($plik, $produkt);
}
	echo "
		<form method='post'>
		Rocznik<input type='text' name='rocznikW'><br>
		Cena<input type='text' name='cenaW'>
		<input type='submit' value='Wyszukaj'>
		</form>
		";
		$rok=$_POST['rocznikW'];
		$cen=$_POST['cenaW'];
		
	
		$tab=file("baza.txt", FILE_IGNORE_NEW_LINES);
	   echo ("<table border='1'>");
	foreach ($tab as $line)
	{
		if (empty($produkt))
		{	
		list ($mak, $mod, $roczn, $c)=explode(":", $line);
		if ($rok>=$roczn && $cen>=$c)
		   echo ("<tr>"."<td>".$mak."</td>"."<td>".$mod."</td>"."<td>".$roczn."</td>"."<td>".$c."</td>"."</tr>");
		}
	}
	echo "</table>";
		
				
?>
	</body>
</html>
