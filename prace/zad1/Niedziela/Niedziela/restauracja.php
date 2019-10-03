<HTML>
<HEAD>
	
	<meta charset="UTF-8">
	<link rel="Stylesheet" type="text/css" href="styl1.css" />
	<title> Restauracja Wszystkie Smaki </title>
	
</HEAD>
<BODY>

	<div id="baner">
		<h1> Witamy w restauracji „Wszystkie Smaki” </h1>
	</div>
	
	<div id="panel_lewy">
		<img src="menu.jpg" alt="Nasze danie">
	</div>
	
	<div id="panel_prawy">
		<h4> U nas dobrze zjesz! </h4>
		<ul>
			<li> Obiady od 40 zł </li>
			<li> Przekąski od 10 zł </li>
			<li> Kolacje od 20 zł </li>
		</ul>
	</div>
	
	<div id="dolny">
		<h2> Zarezerwuj stolik on-line </h2>
		<form action="rezerwacja.php" method="POST" >
		Data (format rrrr-mm-dd) <br /> <input type="text" name="data"><br />
		Ile osób? <br /> <input type="number" name="ile_os"><br />
		Twój numer telefonu: <br /> <input type="text" name="nr_tel"><br />
		<input type="checkbox" id="check"> Zgadzam się na przetwarzanie moich danych osobowych <br />
		<input type="reset" value="WYCZYŚĆ">
		<input type="submit" value="REZERWUJ">
		</form>
	</div>
	
	<div id="stopka">
		Stronę internetową opracował: <i> Niedziela </i>
	</div>


</BODY>
</HTML>