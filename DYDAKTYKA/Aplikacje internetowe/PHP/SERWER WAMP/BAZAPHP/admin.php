<?php
// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "3ti";  // nazwa bazy
$tabela = "oceny";   // nazwa tabeli

    // łączymy się z bazą danych
if (mysql_connect($serwer, $login, $haslo) and     mysql_select_db($baza)) 
 {  // zapytanie do bazy danych
echo "Dodaj nowego ucznia";
echo "<form method='post'>";
echo "id:";
echo "<input type='text' name='id'> <BR />";
echo "imie:";
echo "<input type='text' name='imie'> <BR />";
echo "nazwisko:";
echo "<input type='text' name='nazwisko'> <BR />";
echo "ocena:";
echo "<input type='text' name='ocena'> <BR />";
echo "<input type='submit' name='przycisk' value='Wprowadz'> <BR /> ";
echo "</form>";
if (isset($_POST['id']) && isset($_POST['imie'])&& isset($_POST['nazwisko'])&& isset($_POST['ocena']))
{$a=$_POST['id'];
$b=$_POST['imie'];
$c=$_POST['nazwisko'];
$d=$_POST['ocena'];

        $wprowadz=mysql_query("insert into $tabela values('$a','$b','$c','$d')");
		$wynik = mysql_query("select * from $tabela")
        or die("Błąd w zapytaniu!");
		
		mysql_close();

// wyświetlamy wyniki zapytania

echo "<p align='center'>";
echo "Wynik zapytania do tabeli $tabela";

echo "<table border=1>";
    while($rek = mysql_fetch_array($wynik)) 
	{
        echo "<tr>";
	   $id= $rek['id_u'];
	   $im= $rek['imie']."<br />";
	   $naz= $rek['nazwisko']."<br />";
	   $oc= $rek['ocena']."<br />";

       echo "<td>".$id."</td>";
       echo "<td>".$im."</td>";
	   echo "<td>".$naz."</td>";
	   echo "<td>".$oc."</td>";
       echo "</tr>";
    }
echo "</table>";
echo "</p>";
}
}
?>