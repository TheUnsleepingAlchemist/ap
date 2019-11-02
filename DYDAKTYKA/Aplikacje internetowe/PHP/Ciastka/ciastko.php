<?php
if (isset($_COOKIE['licz']))
  {
   $ile = $_COOKIE['licz'] +1;
  }
   else
       {
        $ile = 1;
       }

setcookie("licz", $ile, mktime(23,59,59,date("m"),date("d"),date("Y")));
echo "Odwiedziłeś dziś tą witrynę ".$ile." razy";
?>
