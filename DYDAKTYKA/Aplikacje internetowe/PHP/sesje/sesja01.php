<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo"<form action='sesja0.php' method='GET'>
    <input type='submit' name='p1' value='wyloguj'>
    </form>";
    @$stan=$_GET['p1'];
      session_start();
      if (isset($_SESSION['count']))
        if($_SESSION['count']>0)
          echo "jesteś zalogowany jako ".$_SESSION['login'];
      if($stan)
        header('Location:sesja0.php');
    ?>
  </body>
</html>
