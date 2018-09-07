<?php
echo "<form action='los.php' method='POST'> 
 <input type='text' name='szukana' value=''>
 <input type='submit' name='przycisk' value='OK'>
</form>
";
if (isset ($_POST['szukana']))
{$szuk=$_POST['szukana'];
//srand (time());
for ($i=0; $i<20; $i++)  {
$liczby[$i] = rand(0,20);
}
$ile = 0;
for ($j=0; $j<20; $j++) {
print "$liczby[$j]".",";
if ($liczby[$j] == $szuk)
$ile++;
}
if ($ile == 0)
print ("<P>Liczby $szuk w tablicy nie odnaleziono.");
else 
print ("<P>Liczby $szuk w tablicy odnaleziono."."$ile razy.");
}
else
	echo "nie wprowadziłes danych";
?>