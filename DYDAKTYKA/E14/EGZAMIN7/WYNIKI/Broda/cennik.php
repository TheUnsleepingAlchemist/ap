<?php
$link = mysqli_connect ("localhost", "root", "", "rowery");
$result = mysqli_query ($link, "SELECT * FROM cennik");

echo "<table border='1'>";
while ($r = mysqli_fetch_array)($result)) {
echo "<tr>";
echo"<td>".$r['nazwa']."</td>";
echo "<td>".$r['cena']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>