<?php
$link= mysqli_connect ('localhost', 'root', '', 'baza');
$data= $_POST['data'];
$osoby= $_POST['osoby'];
$tel= $_POST['tel'];
if(isset($_POST['zamowienie']))
	echo "Zamowienie zostało dodane.";

mysqli_query($link, "INSERT INTO rezerwacje VALUES('', '', '$data', '$osoby', '$tel')");
mysqli_close($link);




