<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hurtownia papiernicza</title>
  <link rel="stylesheet" href="styl.css">
</head>

<body>

  <?php
  $serwer="localhost";
  $login="root";
  $haslo="";
  $baza="sklep";
   ?>

  <div id="baner">
    <h1>W naszej hurtowni kupisz najtaniej</h1>
  </div>

  <div id="lewy">
    <h3>Ceny wybranych artykułów w hurtowni:</h3>
    <table border="1">
      <?php

      $connection = mysqli_connect('localhost', 'root', '')
      or die('Brak połączenia z serwerem MySQL');
      $db = mysqli_select_db($connection, 'sklep')
      or die('Nie mogę połączyć się z bazą danych');


    $query=mysqli_query($link,"SELECT nazwa,cena FROM towary WHERE id<=4;");
    while($hehe=mysqli_fetch_assoc($query))
    {
      echo "<tr>";
      echo "<td>".$hehe['nazwa'];
      echo "<td>".$hehe['cena'];
      echo "</tr>";
    }

    mysqli_close($connection);
      ?>
    </table>
  </div>

  <div id="srodkowy">
    <h3>Ile będą kosztować Twoje zakupy?</h3>
    <form class="" method="post">
      wybierz artykuł
      <select id="listar">
        <option>Zeszyt 60 kartek</option>
        <option>Zeszyt 32 kartki</option>
        <option>Cyrkiel</option>
        <option>Linijka 30 cm</option>
        <option>Ekierka</option>
        <option>Linijka 50 cm</option>
      </select><br>
      liczba sztuk:<input type="number" id="liczba" value="1"><br>
      <input type="submit" id="oblicz" value="OBLICZ">
    </form>
  </div>

  <div id="prawy">
    <img src="zakupy2.png" alt="hurtownia">
    <h3>Kontakt</h3>
    <p>telefon: <br>
      111222333 <br>
      e-mail: <br>
      <a href="mailto:hurt@wp.pl">hurt@wp.pl</p>
  </div>

  <footer>
    <h4>Witrynę wykonał:00000000000</h4>
  </footer>
</body>

</html>
