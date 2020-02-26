<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hurtownia papiernicza</title>
<link rel="stylesheet" href="styl.css">
  </head>
  <body>
<div id="banner">
<h1>W naszej hurtowni kupisz najtaniej</h1>
</div>

<div id="lewy">
<h3>Ceny wybranych artykułów w hurtowni:</h3>
<table border=0px>
<?php
$connect = mysqli_connect('localhost', 'root', '', 'sklep');
$tab = mysqli_query($connect, "SELECT nazwa, cena FROM towary LIMIT 4");
while($nazwa = mysqli_fetch_array($tab)) {
  echo "<tr>";
  echo "<td>";
  echo $nazwa['nazwa'];
  echo "</td>";
  echo "<td>";
  echo $nazwa['cena']." PLN";
  echo "</td>";
  echo "</tr>";
}
mysqli_close($connect);

 ?>


</table>
</div>

<div id="srodek">
<h3>Ile będą kosztować Twoje zakupy?</h3>
<form class="" method="post">
Wybierz artykuł
<select name="produkt">
<option  value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
<option  value="Zeszyt 32 kartki"> Zeszyt 32 kartki</option>
<option  value="Cyrkiel">Cyrkiel</option>
<option  value="Linijka 30 cm">Linijka 30 cm</option>
<option  value="Ekierka">Ekierka</option>
<option  value="Linijka 50 cm">Linijka 50 cm</option>
</select><br>
<input type="number" name="numer" value="1"><br>


  <input type="submit" name="" value="OBLICZ!"><br>
  <?php
  $connect = mysqli_connect('localhost', 'root', '', 'sklep');
  $produkt = $_POST['produkt'];
  $numer = $_POST['numer'];
  $cenaa = mysqli_query($connect, "SELECT cena FROM towary WHERE nazwa LIKE '$produkt'");
  while($nazwa = mysqli_fetch_array($cenaa)) {
    $cena = $nazwa['cena'];
  }
  echo $numer*$cena." PLN";
  mysqli_close($connect);


   ?>
</form>

</div>

<div id="prawy">
<img src="Zakupy2.png" alt="hurtownia">
<h3>Kontakt</h3>
<p>telefon: <br>
   111222333 <br>
  e-mail: <br>
  <a href="hurt@wp.pl"> hurt@wp.pl</a></p>
</div>

<div id="stopka">
<h4>Witryne wykonał:21831236127</h4>
</div>
  </body>
</html>
<?php
$serwer="localhost";
$login="root";
$haslo="";
$baza="sklep";


 ?>
