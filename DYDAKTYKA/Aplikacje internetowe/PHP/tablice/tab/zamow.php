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
    Towar:<br>
       <input type="checkbox" name="k" value="k">Kasza po 2 zł
       ilość:<input type="text" name="ilosc_k"><br>
       <input type="checkbox" name="g" value="g">Groch po 3 zł
       ilość:<input type="text" name="ilosc_g"><br>
       <input type="checkbox" name="m" value="m">Mleko  po 6 zł
       ilość:<input type="text" name="ilosc_m"><br>
      <br>
    <input type="submit" value="Zamów">
  </form>

<?php
    $ilosc_k=$_POST['ilosc_k'];
    $ilosc_g=$_POST['ilosc_g'];
    $ilosc_m=$_POST['ilosc_m'];
    $k=$_POST['k'];
    $g=$_POST['g'];
    $m=$_POST['m'];
$suma=0;
if ($k='k')
  $suma=$suma+$magazyn[0][1]*$ilosc_k;
if ($g='g')
    $suma=$suma+$magazyn[1][1]*$ilosc_g;
if ($m='m')
    $suma=$suma+$magazyn[2][1]*$ilosc_m;

echo "Suma zamownienia: $suma";

    echo "<br>Stan po zamownieniu :<br>";
    for ($i=0;$i<3;$i++)
      {  for ($k=0;$k<3;$k++)
            echo $magazyn[$i][$k] . " <> ";
          echo "<br>";
      }

?>
</body>
</html>
