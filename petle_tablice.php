<?php
$T=[2,3,4,2];
for ($k=0; $k<count($T); $k++) //count zwraca długość tablicy
{echo $T[$k];
echo "<br>";}

$z=10;
$tab[0]=50;
$tab[1]=150;

for ($j=0; $j<2; $j++)
{ echo $tab[$j];
echo "<br>";}

$A["imie"]="Adam";  //tablica asocjacyjna
$A["nazwisko"]="Koc";

foreach ($A as $klucz => $wartosc) {
echo "$klucz : $wartosc <br />";
}

//dla asocjacyjnej nie dzia�a
$tab[]=200;
$tab[]=300;
while( list($klucz, $wartosc) = each($tab) )
echo "$klucz : $wartosc<br />";


echo "___________________________________________ <br>";

// ustalamy sami nazwy indeks�w
$aTab = array('imie' => 'Jan', 'nazwisko' => 'Kowalski', 'ulica' => 'D�uga 5a');
// automatyczne indeksy zaczynaj�ce si� od 0
$aTab2 = array('Jan', 'Kowalski', 'D�uga 5a');

foreach ($aTab as $klucz => $wartosc) {
echo "$klucz : $wartosc <br />";
}

foreach ($aTab2 as $klucz => $wartosc) {
echo "$klucz : $wartosc <br />";
}

echo '*********************************************** <br>';

$sText = 'abcdeee';
echo $sText[0].'<br />';
echo $sText[1].'<br />';
echo $sText[2].'<br />';
echo $sText[3].'<br />';
echo $sText[4].'<br />';
echo $sText[5].'<br />';
echo $sText[6].'<br />';
?>
