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
					<li id="bez_linku">Nasza księgarnia</li>
					<a href="logowanie.php">
						<li>Logowanie</li>
					</a>
					<a href="zakupy.php">
						<li>Zakupy</li>
					</a>
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
				<h1 style="text-align:center;">Nasza księgarnia spełni Twoje wszystkie oczekiwania</h1>
				<ol>
					<li>					
						Książki otrzymasz najpóźniej 3 dni po złożeniu zamówienia
						<ul>
							<li>wysyłka sprawdzoną firmą kurierską</li>
							<li>koszt wysyłki to tylko 5 złotych</li>
						</ul>
					</li>
					<li>
						Przy zakupie ponad 5 książek nie płacisz za kuriera
					</li>
					<li>
						W przypadku uszkodzenia przesyłki zwracamy 100% kosztów, lub bezpłatnie wysyłamy ten sam towar
					</li>
					<li>	
						Szeroki wybór - posiadamy aktualnie 2 miliony tytułów!
					</li>
				</ol>
				<img src="grafika/czyta.gif" alt="Czytanie" style="display:block;margin:auto;margin-top:40px;" />
			</article>
		</section>
		<footer>
			<a href="index.php">Copyright &copy; 2010-<?php $dzis=getdate(); $r=$dzis['year']; echo $r;?> Księgarnia internetowa BOOK-MAX</a>
		</footer>
	</div>
 </body>
</html>		
