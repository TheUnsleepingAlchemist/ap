<!DOCTYPE html>
<html lang="pl" dir+"ltr">
  <head>
    <meta charset="utf-8">
    <title>hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
<div id="baner">
  <h1>W naszej hutwoni kupisz najtaniej</h1>
</div>
<div id="lewy">
  <h3>Ceny wybranych artykułów w hurtowni:</h3>
  <table border="0px" >
    <?php  $conn = mysqli_connect('localhost', 'root', '', 'sklep');
    $wholeQuery = mysqli_query($conn, "SELECT nazwa, cena FROM towary LIMIT 4");
    while($row = mysqli_fetch_array($wholeQuery)) {
      echo "<tr>";
      echo "<td>";
      echo $row['nazwa'];
      echo "</td>";
      echo "<td>";
      echo $row['cena']." PLN";
      echo "</td>";
      echo "</tr>";
    }
    mysqli_close($conn);
    ?>
  </table>
</div>
<div id="srodkowy">
  <h3>Ile będą kosztowały twoje zakupy?</h3>
  <p>Wybierz artykuł</p>
  <form action="" method="post">
    <select name="product" id="">
      <option value="Zeszyt 60 kartek">Zeszyt 60 Kartek</option>
      <option value="Zeszyt 32 Kartki">Zeszyt 32 Kartki</option>
      <option value="Cyrkiel">Cyrkiel</option>
      <option value="Linijka 30cm">Linijka 30cm</option>
      <option value="Ekierka">Ekierka</option>
      <option value="Linijka 50cm">Linijka 50cm</option>
    </select>
    <p>Ilość sztuk:</p>
    <input type="number" name="amount" id="" />
    <input type="submit" value="Obicz" />
  </form>
  <br>
  <?php
      $conn = mysqli_connect('localhost', 'root', '', 'sklep');
      $product = $_POST['product'];
      $amount = $_POST['amount'];
      $priceQuery = mysqli_query($conn, "SELECT cena FROM towary WHERE nazwa LIKE '$product'");
      while($row = mysqli_fetch_array($priceQuery)) {
        $price = $row['cena'];
      }
      echo $amount*$price." PLN";
      mysqli_close($conn);
    ?>
</div>
<div id="prawy">
  <img src="zakupy2.png" alt="hurtownia" />
  <h3>Kontakt</h3>
  <p>telefon: <br>
    111222333<br>
    e-mail:<br>
    <a href="hurt@wp.pl">hurt@wp.pl</a>
  </p>
</div>
<div id="stopka">
  <h4>Witrynę wykonał 000000000000</h4>
</div>
  </body>
</html>
