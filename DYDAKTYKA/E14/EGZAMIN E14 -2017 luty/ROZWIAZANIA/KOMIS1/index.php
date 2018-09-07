<!DOCTYPE html>
<html> 
<head> 
<title>Komis Samochodowy</title> 
<meta charset="utf-8"> 
<link rel="stylesheet" type="text/css" href="komis.css"> 

</head> 
<body> 
<?php
	
		$polaczenie=mysqli_connect("localhost","root","","komis");
		mysqli_select_db($polaczenie,"komis");

?>
<div class="naglowek"><h1> SAMOCHODY</h1></div> 
<div class="lewy"><h2> Wykaz Samochodow </h2> 

<?php 

	$zapytanie=mysqli_query($polaczenie,"SELECT id,marka,model FROM samochody");
			
				echo "<ul>";
				
			while($wyswietl=mysqli_fetch_assoc($zapytanie))
				{
					echo "<li>".$wyswietl['id']." ".$wyswietl['marka']." ".$wyswietl['model']."</li>";
				}
				
				echo"</ul>";	
?> 
	<h2>Zamowienia </h2> 
<?php 

	$zapytanie=mysqli_query($polaczenie,"SELECT samochody_id, klient FROM zamowienia");
			
			echo "<ul>";
			
			while($wyswietl=mysqli_fetch_assoc($zapytanie))
			{	
				echo "<li>".$wyswietl['samochody_id']." ".$wyswietl['klient']."</li>";
			}
			
			echo "</ul>";
?> 
</div> 
<div class="prawy"><h2> Pelne Dane Fiat </h2> 

<?php 
	$zapytanie=mysqli_query($polaczenie,"SELECT * FROM samochody WHERE marka='Fiat'");
			$wyswietl=mysqli_fetch_assoc($zapytanie);
		
		
			for($i = mysqli_num_rows($zapytanie) - 1; $i >= 0; $i--)
			{
				echo $wyswietl['id']." / ".$wyswietl['marka']." / ".$wyswietl['model']." / ".
				$wyswietl['rocznik']." / ".$wyswietl['kolor']." / ".$wyswietl['stan']."<br>"."<br>";
			}
			
			mysqli_close($polaczenie); 
?> 
</div> 
<div class="stopka"> 
<table>
<tr> 
	<td><a href="kwerendy.txt">Kwerendy</a></td><td>AUTOR:**********</td><td><img src="obraz.png" alt="Komis samochodowy"/></td> 
</tr> 
</table> 
</div> 
</body> 
</html> 
