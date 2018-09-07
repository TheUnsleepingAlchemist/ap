<?php
echo "Podaj kod rabatowy: ";
echo '<form action="rabat.php" method="post">
<input type="text" name="kod" />
<input type="submit" value="OK!" />
</form>';
$ceny = 1;
echo "Cena 1: 2.50 zł"."<br />";
echo "Cena 2: 3.50 zł"."<br />";
echo "Cena 3: 5.50 zł"."<br /><br />";

if (isset ($_POST['kod'])) {
	$plik = fopen ("kod.txt", "r");
	if (!$plik) {
		echo "Błąd! Nie da się otworzyć pliku!";
	}
	else {
		$file = file ("kod.txt");
		$kod_on = $file[0];
	}
	
	if ($_POST['kod'] == $kod_on) {
		$ceny *= 0.7;
		echo "Rabat przyznany, prawidłowy kod!";
		echo "<br /><br />"."Nowe ceny: <br />";
		echo "Cena 1: ".(2.50 * $ceny)." zł"."<br />";
		echo "Cena 2: ".(3.50 * $ceny)." zł"."<br />";
		echo "Cena 3: ".(5.50 * $ceny)." zł"."<br /><br />";
	}
	else {
		echo "Rabat nieprzyznany, nieprawidłowy kod!";
	}
}
?>