<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="" method="post">
      <p>Zamawiam .....</p>
      Towar: <input type="text" name="towar" value=""><br>
      ile ton:<input type="text" name="tona" value=""><br>
      <input type="submit" name="przycisk" value="Zamów">
    </form>
<?php
  @$towar=$_POST['towar'];
  @$ilosc=$_POST['tona'];
  $plik=fopen("zamowienia.txt","a");
  $zamowienie=$towar.":".$ilosc.":"."tona/y ". date("H.i d-m-Y")."\n";
  fputs($plik, $zamowienie);
  fclose($plik);
  $suma=0;
  $tab=file("zamowienia.txt", FILE_IGNORE_NEW_LINES);
  echo '<form  action="" method="post">
    <p>Wyszukaj ...</p>
    Towar: <input type="text" name="szukaj" value=""><br>
    <input type="submit" name="przycisk2" value="Wyszukaj">
  </form>';
@$szukaj=$_POST['szukaj'];
  foreach ($tab as $linia) {
      list($towar,$waga,$reszta)=explode(":", $linia);
      if ($szukaj==$towar)
        echo $towar."-- ".$waga."-- ".$reszta."<br>";
      @$suma+=$waga;
   }
echo "Calkowita ilosc zamowionego towaru: ".$suma." ton";
?>
  </body>
</html>
