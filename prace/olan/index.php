<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hurtowania Papiernicza</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <div class="banner">
      <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>
    <div class="left">
      <h3>Ceny wybrarnych aryktółów w hurtowni:</h3>
      <table>
      <?php
          $conn = mysqli_connect('localhost', 'root', '', 'sklep');
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
    <div class="middle">
      <h1>Ile będą kosztować twoje zakupy?</h1>
      <p>Wybierz artykuł</p>
      <form action="" method="post">
        <select name="product" id="">
          <option value="Zeszyt 60 kartek">Zeszyt 60 Kartek</option>
          <option value="Zeszyt 32 Kartki">Zeszyt 32 Kartki</option>
          <option value="Cyrkiel">Cyrkiel</option>
          <option value="Linijka 30 cm">Linijka 30cm</option>
          <option value="Ekierka">Ekierka</option>
          <option value="Linijka 50 cm">Linijka 50cm</option>
        </select>
        <p>Ilość sztuk:</p>
        <input type="number" name="amount" id="" value=1 />
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
    <div class="right">
      <img src="zakupy.png" alt="hurtownia" width="200px" width="200px" />
      <h3>Kontakt</h3>
      <p>
        Telefon:<br />
        111222333 <br />
        E-Mail:<br />
        <a href="mailto:hurt@wp.pl">hurt@wp.pl</a> <br />
      </p>
    </div>
    <footer>Witrynę wykonał: <strong>Jakub Olan</strong></footer>
  </body>
</html>