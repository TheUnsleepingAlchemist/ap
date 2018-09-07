<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "user";   // nazwa tabeli

    // łączymy się z bazą danych
if (mysql_connect($serwer, $login, $haslo) and     mysql_select_db($baza)) 
 {  // zapytanie do bazy danych
echo "<form method='post'>";
echo "Login:";
echo "<input type='text' name='log'> <BR />";
echo "Haslo:";
echo "<input type='text' name='has'> <BR />";
echo "<input type='submit' name='przycisk' value='Wprowadz'> <BR /> ";
echo "</form>";
if (isset($_POST['log']) && isset($_POST['has']))
{$a=$_POST['log'];
 $b=$_POST['has'];

        
		$wynik = mysql_query("select * from $tabela")
        or die("Błąd w zapytaniu!");
		
		mysql_close();

// wyświetlamy wyniki zapytania


$i=false;
    while($rek = mysql_fetch_array($wynik)) 
	{
     if (($rek['login']==$a) &&  ($rek['haslo']==$b))
	  $i=true;
    }

if ($i)
header("Location:admin.php");
else
echo "Podałes bledne haslo lub login. <br> 
<a href='register.php'>Zarejestruj się</a>";
}
}
?>