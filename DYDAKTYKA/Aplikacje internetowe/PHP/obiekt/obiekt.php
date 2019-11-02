<?php
class Punkt //PHP
{private
		$x, $y;
 public
    $z;
		function ustaw ($arg1, $arg2)
        { $this -> x=$arg1;
          $this -> y=$arg2;
        }
      function wypiszX ()
        {return $this->x; }

      function wypiszY ()
        {return $this->y; }
}

$obiektA = new Punkt();
$obiektB = new Punkt();

$obiektA -> ustaw (4,5);
$obiektA -> z = 25;

$obiektB -> ustaw (10,-14);
$obiektB -> z = 45;

echo "Punkt A <br>";
echo "x=".$obiektA -> wypiszX()."<br>";
echo "Y=".$obiektA -> wypiszY()."<br>";
echo "Z=".$obiektA -> z."<br>";

echo "..........................<br>";
echo "Punkt B <br>";
echo "x=".$obiektB -> wypiszX()."<br>";
echo "Y=".$obiektB -> wypiszY()."<br>";
echo "Z=".$obiektB -> z."<br>";

?>
