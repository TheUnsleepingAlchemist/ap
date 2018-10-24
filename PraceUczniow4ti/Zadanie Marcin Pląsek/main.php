<html>
<head>
<meta charset="UTF-8">

</head>

<body>


<center>
<form method="post">
 Marka: <input type="text" name="1"></br>
 Model: <input type="text" name="2"></br>
 Rocznik: <input type="text" name="3"></br>
 Cena: <input type="number" name="4"></br>
 <input type="submit" value="Dodaj"></br>
</form>

<?php

error_reporting(E_ALL ^ E_NOTICE);


if (isset($_POST['1'], $_POST['2'], $_POST['3'], $_POST['4']))
{
	$marka=$_POST['1'];
	$model=$_POST['2'];
	$rocznik=$_POST['3'];
	$cena=$_POST['4'];
		$b1=fopen("auta.txt", "a");
		$b2=$marka.":".$model.":".$rocznik.":".$cena."\n";
		fputs($b1, $b2);
}
	echo "
		<form method='post'>
		Rocznik<input type='text' name='rok'></br>
		Cena<input type='number' name='cena'></br>
		<input type='submit' value='Szukaj'></br>
		</form>
		";
		$rok1=$_POST['rok'];
		$cen1=$_POST['cena'];
		
	
		$tab=file("auta.txt", FILE_IGNORE_NEW_LINES);
	   echo ("<table border='0'>");
	foreach ($tab as $line)
	{
		if (empty($b2))
		{	
		list ($marka, $model, $rok, $cena)=explode(":", $line);
		if ($rok1>=$rok && $cen1>=$cena)
		   echo ("<tr>"."<td>".$marka."</td>"."<td>".$model."</td>"."<td>".$rok."</td>"."<td>".$cena."</td>"."</tr>");
		}
	}
	echo "</table>";
		
				
?>

</center>

</body>

</html>