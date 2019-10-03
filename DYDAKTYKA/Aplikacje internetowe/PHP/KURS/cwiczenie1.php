<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "test działania php";
      $z1=5; $z2=2;
      $reszta=$z1%$z2;
      echo $reszta."<br>";
    echo  floor ($z1/$z2) . "<br>"; // funkcja zaokragla do całych
    $tab=array(1,"ażża",2,3);
    foreach ($tab as $key => $value)
      {
        echo "$key: $value <br>";
      }
      echo $z1;
      @ $plik=fopen ("dane", "r");

    ?>

  </body>
</html>
