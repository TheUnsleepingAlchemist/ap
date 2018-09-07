<html>
<head>
<meta charset="utf-8">
<title>Sklep muzyczny</title>
<link rel="stylesheet" href="muzyka.css" />
</head>
<body>
<div id="pojemnik">

	<div id="baner">
			<h1> SKLEP MUZYCZNY</h1>
	</div>

	<div id="prawy">
		<h2> FORMULARZ REJESTRACYJNY </h2> 
		<?php 
			$polaczenie=mysqli_connect("localhost","root","","sklep");
			$imie=$_POST['imie']; $nazwisko=$_POST['nazwisko']; $adres=$_POST['adres']; $telefon=$_POST['telefon']; $login=$_POST['login']; $haslo=$_POST['haslo'];
			if($zapytanie=mysqli_query($polaczenie,"INSERT INTO uzytkownicy (imie, nazwisko, adres, telefon) VALUES ('$imie', '$nazwisko', '$adres', '$telefon')"))
			if($zapytanie=mysqli_query($polaczenie,"INSERT INTO konta (login, haslo) VALUES ('$login', '$haslo')"))
			echo "Rejestracja $imie $nazwisko została wykonana pomyślnie";
			else
			echo "Błąd rejestracji"; 
		?> 
	</div>

	<div id="lewy">
		<h2> NASZA OFERTA </h2> 
		<Ol>
			<li>Instrumenty muzyczne</li>
			<li>Sprzęt audio</li>
			<li>Płyty CD</li>
		</Ol>
	</div>

</div>
</body>
</html>






