<html>
<head>
<meta charset="utf-8" />
<title>Forum Hobbistyczne</title>
<link rel="stylesheet" href="hobby.css" />
</head>
<body>
<div id="pojemnik">

	<div id="baner">
			<h1> Forum Hobbistyczne</h1>
	</div>

	<div id="lewy">
		<?php 
			$polaczenie=mysqli_connect("localhost","root","","forum");
			$nik=$_POST['nik']; $hobby=$_POST['hobby']; $zawod=$_POST['zawod']; $plec=$_POST['plec']; $haslo=$_POST['haslo'];
			if($zapytanie=mysqli_query($polaczenie,"INSERT INTO uzytkownicy (nick, zainteresowania, zawod, plec) VALUES ('$nik', '$hobby', '$zawod', '$plec')"))
			if($zapytanie=mysqli_query($polaczenie,"INSERT INTO konta (login, haslo) VALUES ('$nik', '$haslo')"))
			echo "Rejestracja $nik została wykonana pomyślnie";
			else
			echo "Błąd rejestracji"; 
		?> 
	</div>

	<div id="prawy">
		<h3> Tematy na forum </h3> 
		<ul>
			<li>Hodowla zwierząt</li>
				<ul type="circle">
					<li>Psy</li>
					<li>Koty</li>
				</ul>	
			<li>Muzyka</li>
			<li>Gry komputerowe</li>
		</ul>
	</div>

</div>
</body>
</html>
