<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<?php
 $server = "localhost";
 $login = "root";
 $haslo = "";
 $baza = "sklep";
 $tabela= "dostawcy,towary";

 $connect = mysqli_connect($server, $login, $haslo, $baza);
?>
<body>
<div id="baner">
    <h1>W naszej hurtowni kupisz najtaniej</h1>
</div>
<div id="lewy">
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
<div id="srodkowy">
    <h3>Ile będą kosztować Twoje zakupy?</h3>
    <form class="" method="post">
        Wybierz artykuł
        <select class="" name="lista">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
            <option value="Cyrkiel"> Cyrkiel</option>
            <option value="Linijka 30cm">Linijka 30 cm</option>
            <option value="Ekierka">Ekierka</option>
            <option value="Linijka 50cm">Linijka 50 cm </option>
</select><br>
Liczba sztuk:
<input type="number" name="555" value="1"><br>


<input type="submit" name="" value="OBLICZ"><br>
<?php
@$produkty = $_POST['lista'];
@$ilosc = $_POST['555'];

@$cena = mysqli_query($connect, "SELECT cena FROM towary WHERE nazwa = '$produkty'");
while($raw = mysqli_fetch_assoc($cena))
{
    $wszystko = $ilosc * $raw['cena'];
    $wszystko1 = round($wszystko, 1);
    echo ("Cena towaru= ".$wszystko1);
}
?>
</form>
</div>
<div id="prawy">
    <img src="zakupy2.png" alt="hurtownia">
<h3>Kontakt</h3>
<p>Telefon:<br>
111222333<br>
e-mail:<br>
<a href ="hurt@wp.pl"> hurt@wp.pl</a></p>
</div>
<div id="stopka">
    <h4>Witryne wykonał: <b>Banaś</b></h4>
</div>
</body>
<?php
@$close = mysqli_close($link);
?>
</html>