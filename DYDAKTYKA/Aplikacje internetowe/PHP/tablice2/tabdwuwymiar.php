<?php
  $produkty = array( array('OPO','Opony',100),
                     array('OLE','Olej',15),
                     array('SWI','Świece zapłonowe',5));
  for($wiersz = 0; $wiersz < 3; $wiersz++)
  {
      for($kolumna = 0; $kolumna < 3; $kolumna++)
      {
          echo'|'.$produkty[$wiersz][$kolumna];
      }
      echo '<br />';
  }
echo "komiec";
echo "test gita";
?>
