<table width="100px" align="center" border="1">
<tr><th>km</th><th>koszt</th></tr>
<tr align="center"><td>
<?
$j=50;
for($i=1;$i<5;$i++) {
echo $km[$i]=$j;
echo "<br/>";
$j+=50;
}
?>
</td>
<td>
<?
$j=200;
for($i=1;$i<5;$i++) {
echo $koszt[$i]=$j;
echo "<br/>";
$j=$j+100;
}

?>
</td></tr></table>