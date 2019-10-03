<?php
session_start();
$tab=["adam", "piotr"];
echo "
      <form action='' method='POST'>
      <input type='text' name='login'>
      <input type='submit' name='p' value='Zaloguj'>
      </form>
";
$login=$_POST['login'];
$i=0;

while ($i<count($tab))
{
  if ($tab[$i]==$login)
     { $_SESSION['login']=$tab[i];
       header("Location: probna.php");
      }
  else
      echo "Błędny login!!!";
  $i++;
}

?>
