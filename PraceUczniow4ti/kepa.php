<html>
  <head>
    <meta charset="utf-8">
    <title>Komis samochodowy</title>
  </head>
  <body>
    <h1>Dealer Samochodzikami</h1>
    <form action="" method="post">
      Mareczka: <input type="text" name="mareczka">
      Modelik: <input type="text" name="modelik">
      Rok: <input type="text" name="rok">
      Cena: <input type="text" name="cena">
      <input type="submit" value="Wprowadź">
    </form>
    <h1>Wyszukaj Wymarzone Autko!</h1>
    <?php
      error_reporting(E_ALL ^ E_NOTICE);
      $mareczka=$_POST['mareczka'];
      $modelik=$_POST['modelik'];
      $cena=$_POST['cena'];
      $rok=$_POST['rok'];
      if (isset($mareczka, $modelik, $rok, $cena))
      {
        $plik= fopen("baza.txt", "a");
        $samochod=$mareczka." | ".$modelik." | ".$rok." | ".$cena." "."\n";
        fputs($plik, $samochod);
      }
      echo "
      <form method='post'>
      <input type='text' name='rokP'>
      <input type='text' name='cenaP'>
      <input type='submit' value='Wyszukaj'>
      </form>
      ";
      $szukaj=$_POST['rokP'];
      $tab=file("baza.txt", FILE_IGNORE_NEW_LINES);
      echo ("<table border='1'>");
      foreach ($tab as $line)
      {
        list ($mareczka, $modelik, $rok, $cena)=explode(" | ", $line);
        if ($szukaj==$rok || $szukaj==$cena)
        echo ("<tr>"."<td>".$mareczka."</td>"."<td>".$modelik."</td>"."<td>".$rok."</td>"."<td>".$cena."</td>");
      }
      echo ("</table>");
    ?>
  </body>
</html>