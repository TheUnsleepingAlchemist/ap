<?php
//https://phpkurs.pl/ciagi-znakowe-stringi/
$ciag = "prezydent@polska.pl";
$domena = strstr($ciag, "@");
echo $domena;
$data = "1992/11/19";

$rok = substr($data, 0, 4);
echo "<br>".$rok;
//...........................
$string="Ala ma kota";
if(!strcmp("Ala ma kota", $string))
   echo ">$string< ten ciag jest rowny";
else
  echo "ciągi są różne";
echo "<br>";

$data = "1992/11/19";
$tablica = explode("/", $data);
foreach ($tablica as $key => $value) {
  echo "$value".":";
}

$tekst = "To jest tekst. Tego zdania nie będzie widać.";
$zdanie = substr($tekst, 0, strpos($tekst, "."));
echo "<br>$zdanie";

$tekst = "Jeśli jesteś za podnieś rękę";
$wynik = str_replace("za", "przeciw", $tekst);
echo "<br>$wynik";

$tekst = 'Zażółć gęślą jaźń';
$wynik = strtr($tekst, 'ĘÓĄŚŁŻŹŃęóąśłżźćń', 'EOASLZZCNeoaslzzcn');
echo "<br>".$wynik;
?>
