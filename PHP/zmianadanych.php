<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="" method="post">
        podaj stary login:<input type="text" name="stary" value=""><br>
        nowy login:<input type="text" name="nowy" value=""><br>
        hasło:<input type="text" name="haslo" value=""><br>
        <input type="submit" name="" value="Zmień login">
      </form>
      <hr>


<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "informatyka";  // nazwa bazy
    // Laczymy sie z baza danych
$link=mysqli_connect($serwer, $login, $haslo,$baza);
if (isset($_POST['stary'],$_POST['nowy'],$_POST['haslo']))
{
  $nowy=$_POST['nowy'];
  $stary=$_POST['stary'];
  $haslo=$_POST['haslo'];

$query=mysqli_query($link, " SELECT login, haslo FROM users where login='$stary' ")
or die("Blad w zapytaniu!");

  $rek = mysqli_fetch_assoc($query);
if ($haslo==$rek['haslo'])
  {$zmiana=mysqli_query($link,"UPDATE users SET login='$nowy' where login='$stary'");
  echo "Login został zmieniony";}
else echo "Podaj właściwe hasło";

 mysqli_free_result($query);
 mysqli_close($link);
}
?>
<!-- UPDATE tabela SET pole = 'nowa_wartosc' WHERE pole = 'szukana_wartosc' -->
</body>
      kierowcy
id_k
imie
nazwisko
kategoria

            auta
rej
maraka
model
przebieg
cena

Napisz skrypty w php:
1. W dwóch kolumnach jako listy punktowane wyświetl wszystkich
  z lewej strony kierowców(imie nazwisko)
  z prawej auta (marka model)
2. Poniżej przedstaw wyszukane auto z najniższym przebiegiem
    i wszystkie jego dane
3. Poniżej oblicz i wyświetl wartość wszystkich aut w bazie.
4. Poniżej stwórz wyszukiwarkę aut po marce.
    Wyświetlaj auta w tabeli.

SELECT rej, marka, model, cena, min(przebieg)'minimum'
FROM auta;



</html>
