<?php
session_start();
if(isset($_SESSION['count']))
$_SESSION['count']=0;

mysql_connect("localhost", "root", "")
or die("Nie mo¿na nawi¹zaæ po³¹czenia z baz¹");
mysql_select_db("3ti")
or die("Wyst¹pi³ b³¹d podczas wybierania bazy danych");

function ShowLogin($komunikat=""){
	echo "$komunikat<br>";
	echo "<form action='sesjalogin.php' method='post'>";
	echo "Login: <input type='text' name='login'><br>";
	echo "Has³o: <input type='text' name='haslo'><br>";
	echo "<input type='submit' value='Zaloguj!'>";
	echo "</form>";
	echo "Jeœli nie jesteœ zarejestrowany, 
	<a href='rejestruj.php'>tu znajdziesz formularz</a>";
}

?>
<!DOCTYPE html 
<head>
	<title>Strona g³ówna</title>
</head>
<body>
<?php
if (isset($_GET["wyloguj"]))
if($_GET["wyloguj"]=="tak"){$_SESSION["count"]=0;
   echo "Zosta³eœ wylogowany z serwisu";}
if($_SESSION["count"]!=1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
		if(mysql_num_rows(mysql_query("select * from user where login = '".htmlspecialchars($_POST["login"])."' AND haslo = '".htmlspecialchars($_POST["haslo"])."'"))){
			echo "Zalogowano poprawnie. <a href='index.php'>PrzejdŸ na stronê g³ówn¹</a>";
			$_SESSION["count"]=1;
			}
		else echo ShowLogin("Podano z³e dane!!!");
		}
	else ShowLogin();
}
else{
?>
Gratulacje! Zalogowa³eœ siê pomyœlnie! Mo¿esz przejœc teraz do innych podstron, np. do <a href="stronka.php">tej</a>
<br><a href='index.php?wyloguj=tak'>wyloguj siê</a>
<?php
}
?>

</body>
</html>
<?php mysql_close(); ?>
