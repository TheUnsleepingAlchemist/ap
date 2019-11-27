<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="zmienna1" value="">
      <input type="checkbox" name="ch1" value="wartosc">
      <input type="submit" name="" value="Oblicz">
    </form>

    <?php
      $zmiennalokalna=$_POST['zmienna1'];
      $wartosccheckbox=$_POST['ch1'];
      echo "$zmiennalokalna<br>";
      echo '$wartosccheckbox='.$wartosccheckbox."<br>";

     ?>
  </body>
</html>
