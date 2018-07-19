<?php
class Punkt
{ private $x, $y; 
 
   public function daneX()
		{return $this->x=20;}
   public function daneY()
		{return $this->y=50;}
	public function wyswietlX()
		{return $this->x;}
	public function wyswietlY()
		{return $this->y;}
}

$A=new Punkt;
$B=new Punkt;


$suma=$A->x+$A->y;
echo "Suma a,b = " . $suma . "<br>";
echo $A->wyswietlX() . " - to jest wlasciwosc x <br>";
echo $A->wyswietlY() . " - to jest wlasciwosc y <br>";
?>