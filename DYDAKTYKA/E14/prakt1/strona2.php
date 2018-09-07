<!doctype html>
<html>
	<head>
		<title>POTĘGOWANIE</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
<?php
	function oblicz_potege()
	{
		if (!isset($_POST['podstawa']) || !isset($_POST['wykladnik'])) return '';
		$podstawa=$_POST['podstawa'];
		$wykladnik=$_POST['wykladnik'];
		if (trim($podstawa)=='' || trim($wykladnik)=='') return 'Wpisz podstawę i wykładnik potęgi';
		if ($wykladnik<=0) return 'Wykładnik potęgi musi być dodatni'; 	
		$wynik= pow($podstawa, $wykladnik);
		return 'Wynik działania wynosi: '.$wynik;
	}
	
	function podstawa_val()
	{
		
		if (isset($_POST['podstawa'])) echo $_POST['podstawa']; else echo '';
	}
	
	function wykladnik_val()
	{
		if (isset($_POST['wykladnik'])) echo $_POST['wykladnik']; else echo '';
	}
?> 
	
	<body>
		<div class="pojemnik">
			<header>
				<a href="index.html"><img src="baner.jpg" alt="baner"></a>
			</header>
			<nav>
				<p><a href="strona1.html">- proste działania</a></p>
				<p><a href="strona2.php">- potęgowanie</a></p>
			</nav>
			<article>
				<h1>POTĘGOWANIE</h1>
				<form action="" method="post">
					<i>Podaj podstawę potęgi:</i> <input type="number" name="podstawa" value="<?php podstawa_val() ?>" />
					<br /><br />
					<i>Podaj dodatni, całkowity wykładnik potęgi:</i> <input type="number" name="wykladnik" value="<?php wykladnik_val() ?>" /><br /><br />
					<input type="submit" name="oblicz" value="POTĘGOWANIE" /><br /><br />
				</form>
				<?php echo oblicz_potege() ?>
			</article> 
		</div>
	</body>
</html>