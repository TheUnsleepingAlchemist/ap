<h2> Dodawanie produktu </h2>
<form action="" method="POST">
  Nazwa produktu: <input type="text" name="nazwaProduktu" ><br>
  Cena produktu:  <input type="text" name="cenaProduktu" ><br>
  Ilość produktu:  <input type="text" name="iloscProduktu" ><br>
  <input type="submit" value="Dodaj">
</form>
<br>
<?php
if (isset($_POST['nazwaProduktu'],$_POST['iloscProduktu'], $_POST['cenaProduktu'] ))
{
$nazwaProduktu=$_POST['nazwaProduktu'];
$cenaProduktu=$_POST['cenaProduktu'];
$iloscProduktu=$_POST['iloscProduktu'];
$plik=fopen("produkty.txt", "a");
$produkt=$nazwaProduktu.":".$cenaProduktu.":".$iloscProduktu."\n";
fputs($plik,$produkt);
}

echo "
<form method='POST'>
 <input type='text' name='nazwaP'>
 <input type='submit' value='Szukaj'>
</form>
";
$szukaj=$_POST['nazwaP'];
$tab=file("produkty.txt", FILE_IGNORE_NEW_LINES);
echo "<table border='1'>";
$sumaMagazynu=0;
foreach ($tab as $line)
{
 list ($nazwa, $cena, $ilosc)=explode(":",$line);
  $sumaMagazynu+=$cena*$ilosc;
 if ($szukaj==$nazwa)
  echo "<tr>"."<td>".$nazwa."</td>"."<td>".$cena."</td>"."<td>".$ilosc."</td>"."</tr>";
}
echo "</table>";
echo "Wartosc magazynu: ".$sumaMagazynu;
?>
