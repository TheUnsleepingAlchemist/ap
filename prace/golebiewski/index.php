<?php $serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "sklep";
$link=mysqli_connect($serwer,$login,$haslo,$baza);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
<div id="baner">
  <h1>W naszej hurtowni kupisz najtaniej</h1>
</div>
<div id="lewy">
  <h3>Ceny wybranych artykułów w hurtowni</h3>
  <table border="1" >
<?php
$query=mysqli_query($link,"SELECT nazwa, cena FROM towary WHERE id<5;");
while($XD=mysqli_fetch_assoc($query))
{
  echo "<tr>";
  echo "<td>".$XD['nazwa'];
  echo "<td>".$XD['cena'];
  echo "</tr>";
}

 ?>

  </table>
</div>
<div id="srodkowy">
  <h3>Ile będą kosztować twoje zakupy?</h3>
  <form class="" method="post">
    Wybierz artykuł
    <select class="" name="lista">
      <option value="">Zeszyt 60kartek</option>
      <option value="">Zeszyt 32kartek</option>
      <option value="">Cyrkiel</option>
      <option value="">Linijka 30cm</option>
      <option value="">Ekierka</option>
      <option value="">Linijka 50cm</option>
    </select>

    <br>
    Liczba sztuk <input type="number" name="numer" value="1" > <br>
    <input type="submit" name="" value="OBLICZ">
  </form>
  <?php

  $numer=$_POST['numer'];
  $lista=$_POST['lista'];

  $zap= mysqli_query($link,"SELECT cena FROM towary WHERE nazwa='$lista'");
  while($kek= mysqli_fetch_assoc($zap))
  {
    $cena= $numer * $kek['cena'];
    $cena2= round($cena, 1);
    echo " do zapłacenia:".$cena2;
  }
  ?>
</div>
<div id="prawy">
<img src="zakupy2.png" alt="hurtownia">
<h3>Kontakt</h3>
<p>telefon: <br> 111222333 <br> e-mail: <br>  <a href="hurt@wp.pl">hurt@wp.pl</a> </p>
</div>
<div id="stopka">
<h4>Witrynę wykonał 00282008956</h4>
</div>

<?php
mysqli_close($link);
 ?>
  </body>
</html>
