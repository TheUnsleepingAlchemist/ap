<html>

 <?php

 include 'serwer.php';
$a=$_POST['art'];
 

mysql_query("insert into komentarze values('$a')")
        or die("Błąd w zapytaniu!");
 ?>
 <center>
--------------------------------------------------------------------------
 <h1>Artykuły</h1>
 --------------------------------------------------------------------------
 
 
 
<form method='POST'></br>
 <textarea name="art" cols="35" rows="15" ></textarea><br/>
<input type=submit  value="Wyślij komentarz">
</form>
<form action="baz.php" method="post"> 
<input type="submit" value="Zobacz komentarze" />
</form>

 
 </html>