<?php
$z=10;

$tab=[23,57,-4,19,-20];

$min=$tab[0];
for ($j=1; $j<5; $j++)
{ if ($min>$tab[j])
    $min=$tab[j];
}
  echo "min=".$min."<br>";

  $minimum=min($tab);
echo $zmienna;


$A["imie"]="Adam";  //tablica asocjacyjna
$A["nazwisko"]="Koc";
$A["wiek"]=50;

foreach ($A as $klucz => $wartosc)
{
  if ($A["imie"]=="Adam")
    echo "$klucz : $wartosc <br />";

}



//dla asocjacyjnej tez dziala
$tab[]=200;
$tab[]=300;
while( list($klucz, $wartosc) = each($tab) )
echo "$klucz : $wartosc<br />";













echo "+++___________________________________________ <br>";

while( list($klucz, $wartosc) = each($A) )
echo "$klucz : $wartosc<br />";
echo "___________________________________________ <br>";

// ustalamy sami nazwy indeks�w
$aTab = array('imie' => 'Jan', 'nazwisko' => 'Kowalski', 'ulica' => 'D�uga 5a');
// automatyczne indeksy zaczynaj�ce si� od 0
$aTab2 = array('Jan', 'Kowalski', 'D�uga 5a');
asort ($aTab);
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
