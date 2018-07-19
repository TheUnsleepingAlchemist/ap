<?php
  // utworzenie krótkich nazw zmiennych
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
  <title>Czesci samochodowe Janka — zamówienia klientów</title>
</head>
<body>
<h1>Czesci samochodowe Janka</h1>
<h2>Zamowienia klientow</h2>
<?php
  //Odczytanie ca³ego pliku
  //Ka¿de zamówienie staje siê elementem tablicy
  $zamowienia = file("zamowienie.txt");
  //obliczenie iloœci elementów tablicy
  $ilosc_zamowien = count($zamowienia);
  if ($ilosc_zamowien == 0)
  {
    echo '<p><strong>Brak zamówieñ
        Proszê spróbowaæ póŸniej</strong></p>';
  }
  echo "<table border='1'>\n";
  echo '<tr><th bgcolor="#CCCFF">Data zamówienia</td>
            <th bgcolor="#CCCFF">Opony</td>
            <th bgcolor="#CCCFF">Olej</td>
            <th bgcolor="#CCCFF">Œwiece zap³onowe</td>
            <th bgcolor="#CCCFF">Suma</td>
            <th bgcolor="#CCCFF">Adres</td>
         
        </tr>';
  for ($i=0; $i<$ilosc_zamowien; $i++)
  {
    //Rozbicie ka¿dej linii
    $linia = explode( "\t", $zamowienia[$i]);
    //zapamiêtanie wy³¹cznie iloœci zamówionych produktów (porzucenie pozosta³ych danych)
    $linia[1] = intval( $linia[1] );
    $linia[2] = intval( $linia[2] );
    $linia[3] = intval( $linia[3] );
    //wyœwietlenie ka¿dego zamówienia
    echo "<tr><td>$linia[0]</td>
              <td align='right'>$linia[1]</td>
              <td align='right'>$linia[2]</td>
              <td align='right'>$linia[3]</td>
              <td align='right'>$linia[4]</td>
              <td>$linia[5]</td>
          </tr>";
  }
  echo '</table>';
?>
</body>
</html>
