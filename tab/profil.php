<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
  echo "Witaj w sklepie internetowym<br>";
  $magazyn=array (
                  array ("Kasza",2,100),
                  array ("Groch",3,250),
                  array ("Mleko",6,50)
                  );

  for ($i=0;$i<3;$i++)
  {  for ($k=0;$k<3;$k++)
      echo $magazyn[$i][$k] . " <> ";
    echo "<br>";
  }

  ?>
  <form action="" method="POST">
    >>>>>>Zamówienie:<br>
    Towar:<SELECT name="towar">
            <option value="x">Wybierz towar</option>
            <option value="Kasza">Kasza</option>
            <option value="Groch">Groch</option>
            <option value="Mleko">Mleko</option>
          </SELECT>
      <br>
    ilość:<input type="text" name="ilosc"><br>
    <input type="submit" value="Zamów">
  </form>

<?php

if (isset($_POST['ilosc'],$_POST['towar']))
  {$ilosc=$_POST['ilosc'];
    $towar=$_POST['towar'];

    switch ($towar)
      {
          case 'Kasza':   echo "<br>Wartosc zamowienia $towar :". $magazyn[0][1]*$ilosc;$magazyn[0][2]=$magazyn[0][2]-$ilosc; break;
          case 'Groch':   echo "<br>Wartosc zamowienia $towar :". $magazyn[1][1]*$ilosc;$magazyn[1][2]=$magazyn[1][2]-$ilosc; break;
          case 'Mleko':   echo "<br>Wartosc zamowienia $towar :". $magazyn[2][1]*$ilosc;$magazyn[2][2]=$magazyn[2][2]-$ilosc; break;
        }
    echo "<br>Stan po zamownieniu :<br>";
    for ($i=0;$i<3;$i++)
      {  for ($k=0;$k<3;$k++)
            echo $magazyn[$i][$k] . " <> ";
          echo "<br>";
      }
}
else {
  echo "Wprowadz dane";
}
?>
</body>
</html>
