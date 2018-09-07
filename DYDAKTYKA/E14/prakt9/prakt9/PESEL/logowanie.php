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
				margin:auto;
				margin-top:40px;
				margin-bottom:40px;
				border:1px solid green;
			}
			td,th
			{
				padding:4px;
				padding-left:10px;
				padding-right:10px;
				
			}
			th
			{
				font-weight:normal;
			}
			span
			{
				color:green;
				font-style:italic;
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
					<li id="bez_linku">Logowanie</li>
					<a href="zakupy.php">
						<li>Zakupy</li>
					</a>
					<a href="koszyk.php">
						<li>Twój koszyk</li>
					</a>
				</ul>
			</nav>
			<article style="overflow:scroll;">
				<form action="" method="post">
					<div id="zalogowany">
						<?php
							require_once('php/rozne.php');
							require_once('php/logowanie.php');
							
							$komunikat=logowanie($logowanie_click);
							if (!$logowanie_click) $komunikat=zarejestruj($zarejestruj_click);
							if (!$logowanie_click && !$zarejestruj_click) $komunikat=wyloguj();
							echo '&nbsp;&nbsp;Zalogowany użytkownik: '.uzytkownik();
						?>
					<input type="submit" name="wyloguj" value="Wyloguj" style="margin-top:8px;color:red;float:right;" />
					</div>
					
					<table>
						<tr>
							<th style="background-color:#d5ead5;">
								Login
							</th>
							<th style="background-color:#d5ead5;">
								Hasło
							</th>
							<th style="background-color:#d5ead5;">
								Powtórz hasło
							</th>
							<th colspan="2" style="background-color:#d5ead5;">
								Potwierdź
							</th>
						</tr>
						
						<tr>
							<td>
								<input type="text" name="login" />
							</td>
							<td>
								<input type="password" name="haslo1" />
							</td>
							<td>
								<input type="password" name="haslo2" />
							</td>
							<td>
								<input type="submit" name="zaloguj" value="Zaloguj" style="color:green;" />
							</td>
							<td>
								<input type="submit" name="zarejestruj" value="Zarejestruj" />
							</td>
						</tr>
						
						<tr>
							<td colspan="5">
								Komunikat informujący o sukcesie logowania lub rejestracji:
							</td>
						</tr>
						<tr>
							<td colspan="5" style="background-color:#fddda3;">		
							<?php								
								if ($komunikat=='') $komunikat='Wpisz dane i wciśnij odpowiedni przycisk';
								echo $komunikat;								
							?>	
							</td>
						</tr>					
					</table>
				</form>
				
				<ul>
					<li>
						Aby się zalogować wpisujesz <span>Login</span> oraz <span>Hasło</span> i wciskasz <span>Zaloguj</span>
					</li>
					<li>
						Aby się wylogować wciskasz <span>Wyloguj</span>
					</li>
					<li>
						Jeżeli jesteś nowym użytkownikiem, wpisujesz <span>Login</span> oraz dwukrotnie hasło - w polu <span>Haslo</span> oraz <span>Powtórz hasło</span> i wciskasz <span>Zarejestruj</span>
					</li>
				</ul>
				
			</article>
		</section>
		<footer>
			<a href="index.php">Copyright &copy; 2010-<?php $dzis=getdate(); $r=$dzis['year']; echo $r;?> Księgarnia internetowa BOOK-MAX</a>
		</footer>
	</div>
 </body>
</html>		
