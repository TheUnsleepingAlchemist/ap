<?php
$A[0]="Ala ma kota";
$A[1]="Dzien dobry";
$A[2]="Hello Word";
$A[3]="Nie wiem";
$n=rand(0,3);
$rok=date("Y-F-d, H:i");
echo $rok."<br>";
switch ($n)
{
  case 0 : echo $A[0]; break;
  case 1 : echo $A[1]; break;
  case 2 : echo $A[2]; break;
  case 3 : echo $A[3]; break;
}
?>
