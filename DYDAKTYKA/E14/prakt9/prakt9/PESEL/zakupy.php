<?php
		@session_start();
?>

<!doctype html>
<html>
	<head>
		<title>Księgarnia internetowa</title>
		<meta charset="utf-8" />
		<meta name="description" content="Strona księgarni internetowej BOOK-MAX" />
		<meta name="keywords" content="księgarnia internetowa, książki" />
		<meta name="author" content="Józef" />
		<link rel="stylesheet" href="style.css" />
		<link rel="shortcut icon" href="grafika/ikona.ico"/>
		<style type="text/css">
			table
			{
				border-collapse:collapse;
				margin:10px;
				line-height:20px;
			}
			td, th
			{
				border:1px solid navy;
				padding:5px;
				font-size:15px;
			}
			p
			{
				padding:20px;
			}
		</style>
	</head>
<body>
	<div id="pojemnik">
		<header>
			<a href="index.php">
				<div id="obrazek">
				</div>
				Księgarnia internetowa BOOK-MAX
			</a>
		</header>
		<section>
			<nav>
				<ul>
					<a href="index.php">
						<li>Nasza księgarnia</li>
					</a>
					<a href="logowanie.php">
						<li>Logowanie</li>
					</a>
					<li id="bez_linku">Zakupy</li>
					<a href="koszyk.php">
						<li>Twój koszyk</li>
					</a>
				</ul>
			</nav>
			<article>
			
				<div id="zalogowany">
					<?php
						require_once('php/rozne.php');
						echo '&nbsp;&nbsp;Zalogowany użytkownik: '.uzytkownik();
					?>
				</div>
				<?php
					if (uzytkownik()=='brak') echo '<p>Musisz się najpierw zalogować</p>';
					else
					{
						require_once('php/zakupy.php');
						if (ksiazki($ksiazki)) pokaz_ksiazki($ksiazki);
					}
				?>
				
			</article>
		</section>
		<footer>
			<a href="index.php">Copyright &copy; 2010-<?php $dzis=getdate(); $r=$dzis['year']; echo $r;?> Księgarnia internetowa BOOK-MAX</a>
		</footer>
	</div>
 </body>
</html>		
