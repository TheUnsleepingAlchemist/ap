<?
$z=10;
$tab[0]=50;
$tab[1]=150;

for ($j=0; $j<5; $j++)
{ echo $tab[$j];}
echo "<br>";
$A["imie"]="Adam";
$A["nazwisko"]="Koc";

foreach ($A as $klucz => $wartosc) {
echo "$klucz : $wartosc <br />";
} 

//dla asocjacyjnej nie dzia�a
$tab[]=200;
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

$sText = 'abcd';
echo $sText[0].'<br />';
echo $sText[1].'<br />';
echo $sText[2].'<br />';
echo $sText[3].'<br />';

?>