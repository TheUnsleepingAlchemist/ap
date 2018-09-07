<?php
class Punkt
{  public $x, $y; 
   public function __construct()
	{$this->x=100; $this->y=200; }	
   public function daneX()
   {return $this->x;}
   public function daneY()
   {return $this->y;}
}

$A=new Punkt();

echo "wlasciwosc x=" . $A->daneX() . "<br>";
echo "wlasciwosc y=" . $A->daneY() . "<br>";

/*
echo "Suma a,b = " . $suma . "<br>";
echo $A->daneX() . " - to jest wlasciwosc x <br>";
echo $A->daneY() . " - to jest wlasciwosc y <br>";
*/

?>