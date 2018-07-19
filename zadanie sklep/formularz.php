<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sklep muzyczny</title>
<link rel="stylesheet" type="text/css" href="muzyka.css">
</head>
<body>
<section class="baner">
<h1>SKLEP MUZYCZNY</h1>
</section>
<section class="panelLewy">
<h2>NASZA OFERTA</h2>
<ol>
<li>Instrumenty muzyczne</li>
<li>Sprzęt audio</li>
<li>Płyty CD</li>
</ol>
</section>
<section class="panelPrawy">
<?php 
$conn = new mysqli('localhost','root','','sklep');
if($conn){
	$name = $_POST['name'];
	$lastName = $_POST['lastName'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];

	echo "Konto $name $lastName zostało zarejestrowane w sklepie muzycznym.";
	if(isset($name) && isset($lastName)&& isset($adress)&&isset($phone)){
	
	$query = "INSERT INTO Uzytkownicy(imie, nazwisko,adres,telefon) VALUES('".$name." ',' ".$lastName."','".$adress."','".$phone." ');";
	$conn->query($query);
	$queryLogin = "INSERT INTO Konta(login,haslo) VALUES('".$_POST['login']."','".$_POST['password']."');";
	$conn->query($queryLogin);
	}
}
else{
	echo 'Cannot connect to database';
}
mysqli_close($conn);
?>
</section>
</body>
</html>