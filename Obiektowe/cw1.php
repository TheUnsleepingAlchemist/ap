<?php
class Punkt
{ private $x, $y; 
  public $a, $b,$d,$e;
   public function daneX()
		{return $this->x=20;}
   public function daneY()
		{return $this->y=50;}
	
   public function _construct($d, $e)
	{$this->_d=$d; $this->_e=$e; }	
}

$A=new Punkt(0,0);
$B=new Punkt(20,30);
//$B->x=10;
$B->a=10;
$B->b=10;
$suma=$B->a+$B->b;
echo "wlasciwosc d=" . $B->d . "<br>";
echo "Suma a,b = " . $suma . "<br>";
echo $A->daneX() . " - to jest wlasciwosc x <br>";
echo $A->daneY() . " - to jest wlasciwosc y <br>";
?>