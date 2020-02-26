<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="" method="POST">
  <input type="text" name="im" value="Jan">
  <input type="text" name="nazwisko" value="Buc">
  K<input type="radio" name="radio1" value="K">
  M<input type="radio" name="radio1" value="M">
  <input type="submit" name="" value="Przeslij">
</form>

<?php

if (isset($_COOKIE['stan']))
    {$ilosc=$_COOKIE['stan']+1;
      echo "odwiedziłes stronę $ilosc razy";
    }
else {
        $ilosc=1;
      }
setcookie('stan',$ilosc, time()+3600);

$imie=$_POST['im'];
$nazwisko=$_POST['nazwisko'];
$plec=$_POST['radio1'];
echo "Moje dane to:".$imie." ".$nazwisko."płeć:".$plec;
?>




  </body>
</html>
