<?php
echo "<form action='suma.php' method='POST'> 
 a=<input type='text' name='a' value=''><br>
 b=<input type='text' name='b' value=''><br>
 <input type='submit' name='przycisk' value='OK'>
</form>
";
if (isset($_POST['a']) && isset($_POST['a']))
{$suma=$_POST['a']+$_POST['b'];
 echo "Suma=$suma";
}
?>