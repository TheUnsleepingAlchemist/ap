<b>Wyszukiwanie</b>

<?
echo '<form name="logowanie" action="login.php" method="GET">';
echo '<input type="text" name = "login"><br>';
echo '<input type="text" name = "haslo"><br>';
echo '<input type="submit" value="OK" method="GET">';
echo '</form>';    
echo'<a href=nowy.php>Zarejestruj nowego uzytkownika</a>';
$a=$_GET['login'];
$b=$_GET['haslo'];
    $db= mysql_connect('localhost', $a,$b)

       or die ("nie zalogowal");
    mysql_select_db ("mpk")
       or die ("Nie mozna wybraæ bazy danych");
$zapytanie="select * from USER WHERE login = '$a'";
$wynik=mysql_query($zapytanie);


?>