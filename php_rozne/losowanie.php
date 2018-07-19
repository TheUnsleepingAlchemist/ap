<?
$tablica = file('przyslowia.txt.txt');
$tekst = array_rand($tablica, 1);
echo $tablica[$tekst];
?>
