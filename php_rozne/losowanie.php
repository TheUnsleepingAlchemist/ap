<?
$tablica = file('przyslowia.txt.txt');
$index = array_rand($tablica, 1);
echo $tablica[$index];
?>

$linia=fgets($plik);
   list($login,$haslo)=explode(":", $linia);
