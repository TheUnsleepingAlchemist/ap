<?php
 $server = "localhost";
 $login = "root";
 $haslo = "";
 $baza = 'sklep';

 $connect = mysqli_connect($server, $login, $haslo, $baza);
 ?>


<html>
<head>
  <meta charset="UTF-8">
  <title>sklep</title>
  <link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="baner">
   <h1> W naszej hurtowni kupisz najtaniej <h1>
  </div>
<div class="lewy">

  <h3>Ceny wybranych artykułów w hurtowni:</h3>
      <table>
        <?php
        $zap = mysqli_query($connect, "SELECT nazwa, cena FROM towary LIMIT 4");
        while($row = mysqli_fetch_assoc($zap))
        {
          echo '<tr>';
          echo '<td>'.$row['nazwa'].'</td>';
          echo '<td>'.$row['cena'].'</td>';
          echo '</tr>';
        }
         ?>
      </table>
  </div>
<div class="srodek">

  <h3>Ile będą kosztować twoje zakupy?</h3>
    <form class="" method="post">
      wybierz artykuł <select class="" name="lista">
      <option value="Zeszyt 60 kartek"> Zeszyt 60 kartek </option>
      <option value="Zeszyt 32 kartki"> Zeszyt 32 kartki </option>
      <option value="cyrkiel"> cyrkiel </option>
      <option value="Linijka 30cm"> Linijka 30cm </option>
      <option value="Ekierka"> Ekierka </option>
      <option value="Linijka 50cm"> Linijka 50cm </option>
    </select><br>
    ilość sztuk <input type="number" name="111" value="1"><br>
    <input type="submit" name="" value="Oblicz"><br>
    <?php
    $artykul = $_POST['lista'];
    $ilosc = $_POST['111'];

    $cena = mysqli_query($connect,"SELECT cena FROM towary WHERE nazwa = '$artykul'");
    while($raw = mysqli_fetch_assoc($cena))
      {
        $all = $ilosc * $raw['cena'];
        $all1 = round($all, 1);
        echo ("Cena towarow= ".$all1);
      }
     ?>
  </form>
</div>
<div class="prawy">
<img src="zakupy.png" alt="Witrynę wykonał">
<h3> Kontakt </h3>
<p>telefon: </p> <p>111222333</p> <p>email: </p>
  <a href = "mailto:hurt@wp.pl"> hurt@wp.pl</a>
</div>
<div class="stopka">
   <h4>Witryne wykonał Hubert Gozdek</h4>
 </div>


</body>
