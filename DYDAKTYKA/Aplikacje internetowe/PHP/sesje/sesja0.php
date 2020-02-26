<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sesje</title>
  </head>
  <body>
    <?php
  	echo "<form action='' method='post'>";
  	echo "Login: <input type='text' name='login'><br>";
  	echo "Haslo: <input type='text' name='haslo'><br>";
  	echo "<input type='submit' value='Zaloguj!'>";
  	echo "</form>";

    session_start();
    $_SESSION['count']=0;
    if(empty($_SESSION['count']))
    $_SESSION['count']=0;

@$log=$_POST['login'];
@$has=$_POST['haslo'];
    $con=mysqli_connect("localhost", "root", "", "populacja");

    if($_GET["p1"]=="wyloguj")
        {$_SESSION["count"]=0;
        echo "Zostales wylogowany z serwisu<br>";}

    if($_SESSION["count"]!=1){
    	if(!empty($_POST["login"]) && !empty($_POST["haslo"]))
      { $zapytanie=mysqli_query($con,"select * from users");
        while ($tab=mysqli_fetch_assoc($zapytanie))
        {if ($log==$tab['login'] && $has==$tab['haslo'])
    		   { echo "Zalogowano poprawnie.<br> <a href='sesja01.php'>Przejdz na strone główną</a><br>";
             $_SESSION['login']=$log;
    			   $_SESSION["count"]=1;
    			  }
        }

     }
       else echo "Podano złe dane!!!";
   }
?>
  </body>
</html>
