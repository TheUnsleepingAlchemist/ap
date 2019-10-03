<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "baza";

	$data_r = $_POST['data'];
	$ile_os = $_POST['ile_os'];
	$nr_tel = $_POST['nr_tel'];

	$connect = mysqli_connect($server, $user, $pass, $database) or die("BŁĄD POŁĄCZENIA");

	$kwerenda = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ('$data_r','$ile_os','$nr_tel')";

	$zapytanie = mysqli_query($connect, $kwerenda) or die("BŁĄD ZAPYTANIA");

	echo "Dodano rezerwację do bazy";
	mysqli_close($connect);


?>
