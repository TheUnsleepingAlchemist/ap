 <html>
 <head>
	<meta charset="UTF-8">
	<title>Restauracja Wszystkie Smaki</title>
	<link rel="stylesheet" type="text/css" href=" styl1.css">
 </head>
 <body>
	<div id="baner">
		<h1>Witamy w restauracji Wszystkie Smaki</h1>
	</div>
	<div id="lewy">
		<img src="menu.jpg" alt="Nasze danie" height="400px">
	</div>
	<div id="prawy">
		<h4>U nas dobrze zjesz!</h4>
		<ul>
		<li>Obiady od 40 zł</li>
		<li>Przekąski od 10 zł</li>
		<li>Kolacje od 20 zł</li>
		</ul>
	</div>
  <div id="koniec"></div>
	<div id="dolny">
		<h2>Zarezerwuj stolik on-line</h2>
		<form action="rezerwacja.php" method="POST">
			Data (format rrrr-mm-dd)<br>
			<input type="text" name="data" value=""><br>
			Ile osób?<br>
			<input type="number" id="ile"> <br>
			Twój numer telefonu:<br>
			<input type="text" name="telefon" value=""><br>
			<input type="checkbox" id="tak">
			Zgadzam się na przetwarzanie moich danych osobowych:<br>
			<input type="reset" name="czysc" value="Wyczyść" >
			<input type="submit" name="rezerwuj" value="Zarezerwuj" >
		</form>
	</div>
	<div id="stopka">
		Stronę internetową opracował:<i>Ołub Ernest</i>
	</div>
 </body>
 </html>
