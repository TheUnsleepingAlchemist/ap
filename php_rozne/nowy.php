<b>Rejestracja nowego u¿ytkownika</b>
<?
echo '<form name="logowanie" action="nowy.php" method="GET">';
echo '<input type="text" name = "login"><br>';
echo '<input type="text" name = "haslo"><br>';
echo '<input type="submit" value="OK" method="GET">';
echo '</form>';    

$a=$_GET['login'];
$b=$_GET['haslo'];
    $db= mysql_connect('localhost', 'root','krasnal')
       or die ("nie zalogowal");
    mysql_select_db ("mpk")
       or die ("Nie mozna wybraæ bazy danych");
$zapytanie="GRANT select ON mpk.* TO $a identified by '$b'";
$wynik=mysql_query($zapytanie);

echo '<a href=login.php>Powrot</a>';


?>