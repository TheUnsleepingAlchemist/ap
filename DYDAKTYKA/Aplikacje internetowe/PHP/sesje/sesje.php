<body>

<form class=""  method="post">
  <input type="text" name="pole" value=""><br>
  <input type="text" name="haslo" value=""><br>
  <input type="submit" name="p1" value="zaloguj">

</form>
<form class=""  method="post">
  <input type="submit" name="p2" value="wyloguj">
</form>

<?php
session_start();
@$p1=$_POST['p1'];
@$p2=$_POST['p2'];
@$haslo=$_POST['haslo'];
@$login = $_POST['pole'];

if ($haslo != "haslo" || $login != "Michalek2001") {
  echo ("zły login lub haslo"."<br>");
}
elseif ($p1=="zaloguj")
  {$_SESSION['zaloguj']=1;}
elseif ($p2=="wyloguj")
  { $_SESSION['zaloguj']=0;}

if (@$stan=$_SESSION['zaloguj']>0)
{
  echo "jestes zalogowany";
  $_SESSION['login']=$login;
  header('Location:stronka.php');
}
else {
  echo "jestes wylogowany";
}

?>
</body>
