<?php

$tekst = 'ala ma kota. Kot "MA" alę';
echo "<b>Start</b>: $tekst<br>";

$tekst = addslashes($tekst);
echo "<b>Addslashes</b>: $tekst<br>";

$tekst = strtoupper($tekst);
echo "<b>strtoupper</b>: $tekst<br>";

$tekst = stripslashes($tekst);
echo "<b>stripslashes</b>: $tekst<br>";

$tekst = str_replace('MA', 'nie ma', $tekst);
echo "<b>str_replace</b>: $tekst<br>";

$a = ' a ';
$b = 'a';
IF ($a==$b)
	{
	echo 'zmienne a i b są identyczne<br>';
	}
else
	{
	echo 'zmienne a i b są różne<br>';
	}

echo '<br><b>Trim[/rk:h]';
$a = trim($a);
IF ($a==$b)
	{
	echo 'teraz zmienne a i b są identyczne';
	}
else
	{
	echo 'zmienne a i b są różne';
	}
