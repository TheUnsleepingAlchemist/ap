<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <input type="text" name="pole1" value="">
      <input type="submit" name="" value="Pokaz">
    </form>
      <?php
        $liczba=$_POST['pole1'];
        for ($i=0;  $i<$liczba;   $i++)
          {echo "*"; }
       ?>


  </body>
</html>
