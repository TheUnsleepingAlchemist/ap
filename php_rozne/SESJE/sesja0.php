<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="" method="post">
  <input type="text" name="login" value="">
  <input type="submit" name="p1" value="Zaloguj">
</form>

<form  action="" method="post">
    <input type="submit" name="p2" value="Wyloguj">
</form>

    <?php
      session_start();
      @$p1=$_POST['p1'];
      @$p2=$_POST['p2'];
      @$login=$_POST['login'];

      if ($p1=="Zaloguj")
        {$_SESSION['zaloguj']=1;
        }
      if ($p2=="Wyloguj")
          {$_SESSION['zaloguj']=0;
          }

      if ($stan=$_SESSION['zaloguj']>0)
          {echo "jesteś zalogowany";
            $_SESSION['login']=$login;
            header('Location:probna.php');
          }
      else {
          echo "jesteś wylogowany";
          }

     ?>

  </body>
</html>
