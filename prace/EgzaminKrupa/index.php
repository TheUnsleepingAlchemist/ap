<!DOCTYPE html>
<?php
$server = "localhost";
$login = "root";
$haslo = "";
$baza = 'sklep';
$tabela = '';


$connect = mysqli_connect($server, $login, $haslo, $baza);
?>

<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hurtownia papiernicza</title>
  <link rel="stylesheet" href="styl.css">
</head>
<body>
  <div id="baner">
    <h1>W naszej hurtowni kupisz najtaniej</h1>
  </div>
  <div id="lewy">
    <h3>Ceny wybranych artykułów w hurtowni:</h3>
    <table>
    <?php
    $query = mysqli_query($connect, "SELECT nazwa, cena FROM towary LIMIT 4");
    while ($req = mysqli_fetch_assoc($query))
    {
      echo '<tr>';
      echo '<td>'.$req['nazwa'].'</td>';
      echo '<td>'.$req['cena'].'</td>';
      echo '</tr>';
}

    ?>
  </table>
  </div>
  <div id="srod">
    <h3>Ile będą kosztować Twoje zakupy?</h3>
    <form class="" method="post">
      wybierz artykuł <select name="wyb">
        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
        <option value="Cyrkiel">Cyrkiel</option>
        <option value="Linijka 30cm">Linijka 30cm</option>
        <option value="Ekierka">Ekierka</option>
        <option value="Linijka 50cm">Linijka 50cm</option>

      </select><br>
      liczba sztuk:<input type="number" name="licz" value="1"><br>
      <input type="submit" name="" value="OBLICZ">
    </form>
    <?php
    $wyb = $_POST['wyb'];
    $licz = $_POST['licz'];

    $zap = mysqli_query($connect, "SELECT cena FROM towary WHERE nazwa='$wyb'");
    while ($raw = mysqli_fetch_assoc($zap))
    {
      $cena = $licz * $raw['cena'];
      $cenaa = round($cena, 1);
      echo "Do zapłaty: ".$cenaa;
    }

     ?>
  </div>
  <div id="prawy">
    <img src="zakupy2.png" alt="hurtownia">
    <h3>Kontakt</h3>
    <p>telefon:<br> 111222333<br> e-mail:<br> <a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>

  </div>
  <div id="stopka">
    <h4>Witrynę wykonał: mój pesel</h4>
  </div>

</body>

</html>
