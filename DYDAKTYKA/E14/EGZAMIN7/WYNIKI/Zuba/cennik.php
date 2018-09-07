<?php
$laczenie = mysqli_connect ("localhost", "root", "", "rowery");
$result = mysqli_query ($laczenie, "Select * FROM cennik");

echo "<center><table border='1'>";
echo "<th>Nazwa</th><th>Cena</th>";
while ($r = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$r['nazwa']."</td>";
	echo "<td>".$r['cena']."</td>";
	echo "</tr>";
}
echo "</table></center>";
mysqli_close($laczenie);
?>