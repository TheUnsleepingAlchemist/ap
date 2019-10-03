<?php
if (isset($_COOKIE['status']))
  {
    echo "Juz glosowales! Nie możesz ponownie głosować";
    $glosy=$_COOKIE['glos'];
    echo "<br>Wynik głosowania -> $glosy";
  }
   else
       {setcookie('status',1 , time()+15);
        echo '<form action="" method="POST">
                Zaznacz jeżli popierasz kandydata<input type="radio" name="tak" value="1">
                <input type="submit" value="Zaglosuj"><br />
              </form>';
              $glosy=$_COOKIE['glos'] + 1;
       }
setcookie('glos',$glosy, time()+120);
  //koniec
?>
