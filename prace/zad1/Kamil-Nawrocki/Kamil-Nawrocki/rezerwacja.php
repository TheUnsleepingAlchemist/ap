<?php
$polaczenie=mysqli_connect('localhost', 'root', '', 'baza');
$data=$_POST['data'];
$ilosc=$_POST['ilosc'];
$telefon=$_POST['telefon'];
$dodanie=mysqli_query($polaczenie, "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', '$ilosc', '$telefon')") 
  or die ("Czegoś brakuje");
mysqli_close($polaczenie);
?>