<?php
$suma=0;
  $produkty = array( array(2,3,5),
                     array(6,7,15),
                     array(4,5,5));
  for($wiersz = 0; $wiersz < 3; $wiersz++)
  {
      for($kolumna = 0; $kolumna < 3; $kolumna++)
      {
          echo'|'.$produkty[$wiersz][$kolumna];
					$suma+=$produkty[$wiersz][$kolumna];
			}
      echo '<br />';
			
  }
	echo "suma=$suma";
?>