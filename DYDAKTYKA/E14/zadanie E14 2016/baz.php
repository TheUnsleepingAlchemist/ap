<html>

<center>
--------------------------------------------------------------------------
<h1> Komentarze</h1>
--------------------------------------------------------------------------
</br></br>
<form action="dodaj.php" method="post"> 
<input type="submit" value="Dodaj nowy komentarz" />
</form>
--------------------------------------------------------------------------
</br>
</html>
<?php

include 'serwer.php';

  $wynik = mysql_query("select * from komentarze")
        or die("Błąd w zapytaniu!");
        mysql_close();

// wyświetlamy wyniki zapytania
echo "<table border=1>";
    while($rek = mysql_fetch_array($wynik)) 
	{
	
        echo "<tr>";
	   $kom= $rek['Koment'];
	  

       echo "<td>".$kom."</td>";
   
       echo "</tr>";
    }
	echo "</br>";
echo "</table>";

/**echo <<<END

END;**/
?>