<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularz</title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="liczba1" value="">
      <input type="text" name="liczba2" value="">
      <input type="submit" name="p1" value="Oblicz">
    </form>

    <?php
    $wyr='/[0-9]/';
    if (isset($_POST['liczba1']))
    {  $liczba1=$_POST['liczba1'];
       $liczba2=$_POST['liczba2'];
       if (strlen($liczba1)>=4)
        if (preg_match($wyr, $liczba1))
          echo ("hasło spełnia wymagania");
        else
           echo ("brak znaku cyfry");
      else
        echo ("hasło NIE spełnia wymagań");

    }
    else
    {
      echo ("Wprowadz liczbe ...");
    }
    ?>
  </body>
</html>
