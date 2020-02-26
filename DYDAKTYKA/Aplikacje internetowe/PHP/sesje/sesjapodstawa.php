<?php
session_start();
$_SESSION['count']=0;
if(empty($_SESSION['count']))
$_SESSION['count']=0;

mysqli_connect("localhost", "root", "", "populacja");

function ShowLogin($komunikat=""){
	echo "$komunikat<br>";
	echo "<form action='sesjalogin.php' method='post'>";
	echo "Login: <input type='text' name='login'><br>";
	echo "Haslo: <input type='text' name='haslo'><br>";
	echo "<input type='submit' value='Zaloguj!'>";
	echo "</form>";
	echo "Je�li nie jeste� zarejestrowany, <a href='rejestruj.php'>tu znajdziesz formularz</a>";
}

?>
<!DOCTYPE html
<head>
	<title>Strona glowna</title>
</head>
<body>
<?php
if($_GET["wyloguj"]=="tak"){$_SESSION["count"]=0;echo "Zosta�e� wylogowany z serwisu";}
if($_SESSION["count"]!=1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
		if(mysql_num_rows(mysql_query("select * from user where login = '".htmlspecialchars($_POST["login"])."' AND haslo = '".htmlspecialchars($_POST["haslo"])."'"))){
			echo "Zalogowano poprawnie. <a href='index.php'>Przejd� na stron� g��wn�</a>";
			$_SESSION["count"]=1;
			}
		else echo ShowLogin("Podano z�e dane!!!");
		}
	else ShowLogin();
}
else{
?>
Gratulacje! Zalogowa�e� si� pomy�lnie! Mo�esz przej�c teraz do innych podstron, np. do <a href="stronka.php">tej</a>
<br><a href='index.php?wyloguj=tak'>wyloguj si�</a>
<?php
}
?>

</body>
</html>
<?php mysql_close(); ?>
