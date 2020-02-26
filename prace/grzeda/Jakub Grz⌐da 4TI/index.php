<?php
$server = "localhost";
$login = "root";
$haslo = "";
$baza = 'sklep';
$connect = mysqli_connect($server, $login, $haslo, $baza);
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <div class="baner">
        <h1>W naszej hurtowni kuppisz najtaniej</h1>
    </div>

    <div class="lewy">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>
        <table>
          <?php
            $zap = mysqli_query($connect,"SELECT nazwa, cena FROM towary WHERE cena='$zmienna'");
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

    <div class="srodkowy">
        <h3>Ile będą kosztować twoje zakupy?</h3>
        <form class="" method="post">
          wybierz artykuł <select class="" name="wyb">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value="Linijka 30 cm">Linijka 30cm</option>
            <option value="Ekierka">Ekierka</option>
            <option value="Linijka 50 cm">Linijka 50cm</option>
          </select><br>
          ilość sztuk <input type="number" name="szt" value="1"><br>
          <input type="submit" name="" value="OBLICZ"><br>
        </form>
        <?php
        @$artykul = $_POST['wyb'];
        @$ilosc = $_POST['szt'];

        $cena = mysqli_query($connect,"SELECT cena FROM towary WHERE nazwa = '$artykul'");
        while($raw = mysqli_fetch_assoc($cena))
        {
          $all = $ilosc * $raw['cena'];
          $all1 = round($all, 1);
          echo ("Cena towarów: ".$all1);
        }
        ?>
    </div>

    <div class="prawy">
        <img src="zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <p>telefon :<br> 111222333 <br> e-mail:</p> <a href="mailto:hurt@wp.pl" >hurt@wp.pl</a>
    </div>

    <div class="stopka">
      <h4>Witrynę wykonał: Jakub Grzęda 4TI</h4>
    </div>
<?php
mysqli_close($connect);
 ?>
  </body>
</html>
