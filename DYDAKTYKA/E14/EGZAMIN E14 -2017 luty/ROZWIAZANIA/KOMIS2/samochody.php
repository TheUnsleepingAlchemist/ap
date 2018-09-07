<?php

$c = mysqli_connect("localhost", "root", "", "komis");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wynajmujemy samochody</title>
		<link rel="stylesheet" type="text/css" href="styl.css">
	</head>
	<body>
		<section class="baner">
			<h1>Wynajem Samochodów</h1>
		</section>
		<section class="lewy">
			<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
			<?php
			
			$zap1 = mysqli_query($c, "SELECT `id`, `model`, `kolor` FROM samochody WHERE `marka`='Toyota' AND `rocznik`='2014'");
			while($r = mysqli_fetch_assoc($zap1)){
				echo $r['id'].' Toyota '.$r['model'].'. Kolor: '.$r['kolor'].'<br>';
			}
			
			?>
			<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
			<?php
			
			$zap2 = mysqli_query($c, "SELECT `id`, `marka`, `model`, `rocznik` FROM samochody");
			while($r = mysqli_fetch_assoc($zap2)){
				echo $r['id'].' '.$r['marka'].' '.$r['model'].' '.$r['rocznik'].'<br>';
			}
			
			?>
		</section>
		<section class="srodkowy">
			<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
			<?php
			
			$zap3 = mysqli_query($c, "SELECT samochody.`id`, samochody.`model`, zamowienia.`telefon` FROM zamowienia, samochody WHERE zamowienia.`Samochody_id`=samochody.`id`");
			while($r = mysqli_fetch_assoc($zap3)){
				echo $r['id'].' '.$r['model'].' '.$r['telefon'].'<br>';
			}
			
			?>
		</section>
		<section class="prawy">
			<h2>NASZA OFERTA</h2>
			<ul>
				<li>Fiat</li>
				<li>Toyota</li>
				<li>Opel</li>
				<li>Mercedes</li>
			</ul>
			<p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
			<p>autor strony: 00000000000</p>
		</section>
	</body>
</html>
<?php

mysqli_close($c);

?>