<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hurtownia papiernicza</title>
  </head>
  <body>
    <link rel="stylesheet" href="styl.css">

<div class="baner">
 <h1>W naszej hurtowni kupisz najtaniej</h1>
</div>

<div class="lewy">
<h3 class="h3">Ceny wybranych artykułów w hurtowni:</h3>

<center>
<table class="table">
<tr>
  <td>1</td><td>2</td>
</tr>
<tr>
  <td>1</td><td>2</td>
</tr>
<tr>
  <td>1</td><td>2</td>
</tr>
<tr>
  <td>1</td><td>2</td>
</tr>

</table>
</center>
</div>

<div class="srodkowy">
<h3 class="h3">„Ile będą kosztować Twoje zakupy?</h3>

<form class=""  method="post">
 wybierz artykuł<select class="" name="artykul">
   <option value="">zeszyt 60 kartek</option>
   <option value="">zeszyt 32 kartek</option>
   <option value="">cyrkiel</option>
   <option value="">linijka 30cm</option>
   <option value="">cyrkiel</option>
   <option value="">linijka 50cm</option>
</select>
<br>
liczba sztuk<input type="number" name="sztuki" value="1"><br>

<input type="submit" name="" value="OBLICZ"><br>
<?php
@$sztuki=$_POST['sztuki'];
$conn = mysqli_connect('localhost', 'root', '', 'sklep');
@$nazwa = $_POST['nazwa'];
@$cena = $_POST['cena'];
$zapytanie2 = mysqli_query($conn, "SELECT nazwa,cena FROM `towary` WHERE nazwa='cyrkiel'");
while($row = mysqli_fetch_array($zapytanie2)) {
  $cena = $row['cena'];
}
echo $sztuki*$cena." PLN";
mysqli_close($conn);
?>
</form>

</div>

<div class="prawy">

  <h3 class="h3" id="Kontakt">Kontakt</h3>
  <p>telefon <br> 111222333 <br> e-mail: <br> <a href="www.wp.pl">hurt@wp.pl</a> </p>
<img src="zakupy2.png" alt="„hurtownia" class="h3">
</div>

<div class="stopka">
<h4>Witrynę wykonał:Twój pesel</h4>
</div>


  </body>
</html>


<?php
$serwer="localhost";
$login="root";
$haslo="";
$baza="sklep";
$tabela="towary";
$connect=mysqli_connect($serwer, $login ,$haslo,$baza);



mysqli_query($connect, "SELECT * FROM `towary` WHERE id < 5");

mysqli_close($connect);

?>
