<?php
$link = mysqli_connect('localhost', 'root','', 'baza');
$data = $_POST['data'];
$osoby = $_POST['osoby'];
$telefon = $_POST['telefon'];

mysqli_query($link, "INSERT INTO rezerwacje VALUES ('','$data','$osoby','$telefon')");

echo ("Dodano rezerwację do bazy");

mysqli_close($link);
