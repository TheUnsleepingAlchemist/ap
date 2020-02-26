<?php
function silnia ($n)
{
  if ($n==1)
      {return 1;}
    else
   {
    return silnia($n-1)*$n;
   }
}
echo "wynik silni=".silnia (5);
echo "<br>test";
?>
