<?php

$owoce = array ("d"=>"mango", "a"=>"papaja", 
"b"=>"banan", "c"=>"aronia");
rsort ($owoce);
reset ($owoce); // Funkcja ta powoduje powrót do pierwszego elementu tablicy
while (list ($klucz, $wartosc) = each ($owoce)) 
{
    echo "$klucz = $wartosc"."<br>";
}

?>