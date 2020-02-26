<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hurtownia Papiernicza</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <div id="baner">
      <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>
    <div id="lewy">
    <h3>Ceny wybranych artykułów w hurtowni:</h3>
    <table border="0px">
      <?php

      $nowy = mysqli_connect('localhost', 'root', '', 'sklep');
      $wholeQuery = mysqli_query($nowy, "SELECT nazwa, cena FROM towary LIMIT 4");
      while($naz = mysqli_fetch_array($wholeQuery)) {
        echo "<tr>";
        echo "<td>";
        echo $naz['nazwa'];
        echo "</td>";
        echo "<td>";
        echo $naz['cena']." PLN";
        echo "</td>";
        echo "</tr>";
      }
      mysqli_close($nowy);

?>
    </table>
    </div>
    <div id="srodkowy">
<h3>Ile będą kosztować Twoje zakupy?</h3>
<form method="POST">
Wybierz artykuł
<select name='prod'>
  <option value="">Zeszyt 60 kartek</option>
  <option value="">Zeszyt 32 kartki</option>
  <option value="">Cyrkiel</option>
  <option value="">Linijka 30 cm</option>
  <option value="">Ekierka</option>
  <option value="">Linijka 50 cm</option>
</select><br>
Liczba sztuk: <input type="number" name="num" value="1"><br>
<input type="submit" name="" value="Oblicz">

<?php

$serwer="localhost";
$login="root";
$haslo="";
$baza="sklep";
$tabela="dostawcy, towary";

$link=mysqli_connect($serwer, $login ,$haslo, $baza);
$prod=$_POST['prod'];
$num=$_POST['num'];
$cena= mysqli_query($link, "SELECT cena FROM towary WHERE nazwa LIKE '$prod'");
while($nazwa = mysqli_fetch_array($cena)){
  $cena2 = $nazwa ['cena'];
}
echo $num*$cena2."PLN"; //Nie zalecam!!!!
mysqli_close($link);
?>

</form>
    </div>
    <div id="prawy">
<img src="zakupy2.png" alt="hurtownia">
<h3>Kontakt</h3>
<p>telefon: <br>
  111222333 <br>
  e-mail: <br>
  <a href="hurt@wp.pl">hurt@wp.pl</a></p>
    </div>
    <div id="stopka">
<h4>Witryne wykonał:347895893443</h4>

  </body>
</html>
