<html>
  <head>
    <meta charset="utf-8">
    <title>Komis samochodowy</title>
  </head>
  <body>
    <h1>Komis samochodowy</h1>
    <form method="post">
      Marka: <input type="text" name="marka">
      Model: <input type="text" name="model">
      Rocznik: <input type="text" name="rocznik">
      Cena: <input type="text" name="cena">
      <input type="submit" value="Wprowadź">
    </form>
    <h1>Wyszukiwarka aut</h1>
    <?php
      //error_reporting(E_ALL ^ E_NOTICE);
      $marka=$_POST['marka'];
      $model=$_POST['model'];
      $rocznik=$_POST['rocznik'];
      $cena=$_POST['cena'];
      if (isset($marka, $model, $rocznik, $cena))
      {
        $plik= fopen("baza.txt", "a+");
        $samochod=$marka." | ".$model." | ".$rocznik." | ".$cena." "."\n";
        fputs($plik, $samochod);
      }
      echo "
      <form method='post'>
      Rocznik: <input type='text' name='rocznikP'><br>
      Cena: <input type='text' name='cenaP'><br>
      <input type='submit' value='Wyszukaj'>
      </form>
      ";
      $szukaj=$_POST['rocznikP'];
      $szukaj1=$_POST['cenaP'];
      $tab=file("baza.txt", FILE_IGNORE_NEW_LINES);
      echo ("<table border='1'>");
      foreach ($tab as $line)
      {
        if  (empty($samochod))
        {
        list ($mar, $mod, $roczn, $cen)=explode(" | ", $line);
        if ($szukaj>=$roczn && $szukaj1>=$cen)
        echo ("<tr>"."<td>".$mar."</td>"."<td>".$mod."</td>"."<td>".$roczn."</td>"."<td>".$cen."</td>"."</tr>");
        }
      }
      echo ("</table>");
      ?>
  </body>
</html>