<?
header("Content-type: image/jpg");
$rysunek=imagecreate ($a,$b);
$czarny=imagecolorallocate ($rysunek, 0, 0, 0);
$tlo=imagecolorallocate ($rysunek, 100, 255, 100);
imagefill ($rysunek, 0, 0, $tlo); 
   
imagegif ($rysunek);
  
?>