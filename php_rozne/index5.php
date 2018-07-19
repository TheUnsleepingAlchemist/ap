<?php
  // utworzenie kr�tkich nazw zmiennych
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
  <title>Czesci samochodowe Janka � zam�wienia klient�w</title>
</head>
<body>
<h1>Czesci samochodowe Janka</h1>
<h2>Zamowienia klientow</h2>
<?php
  //Odczytanie ca�ego pliku
  //Ka�de zam�wienie staje si� elementem tablicy
  $zamowienia = file("zamowienie.txt");
  //obliczenie ilo�ci element�w tablicy
  $ilosc_zamowien = count($zamowienia);
  if ($ilosc_zamowien == 0)
  {
    echo '<p><strong>Brak zam�wie�
        Prosz� spr�bowa� p�niej</strong></p>';
  }
  echo "<table border='1'>\n";
  echo '<tr><th bgcolor="#CCCFF">Data zam�wienia</td>
            <th bgcolor="#CCCFF">Opony</td>
            <th bgcolor="#CCCFF">Olej</td>
            <th bgcolor="#CCCFF">�wiece zap�onowe</td>
            <th bgcolor="#CCCFF">Suma</td>
            <th bgcolor="#CCCFF">Adres</td>
         
        </tr>';
  for ($i=0; $i<$ilosc_zamowien; $i++)
  {
    //Rozbicie ka�dej linii
    $linia = explode( "\t", $zamowienia[$i]);
    //zapami�tanie wy��cznie ilo�ci zam�wionych produkt�w (porzucenie pozosta�ych danych)
    $linia[1] = intval( $linia[1] );
    $linia[2] = intval( $linia[2] );
    $linia[3] = intval( $linia[3] );
    //wy�wietlenie ka�dego zam�wienia
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
