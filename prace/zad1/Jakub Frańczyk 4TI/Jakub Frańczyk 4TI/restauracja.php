<html>
<head>
<meta name="Author" content="Jakub Frańczyk" />
<title>Restauracja Wszystkie Smaki</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styl1.css">
<title>Restauracja Wszystkie Smaki</title>
</head>
<body>
<div id="baner">
<h1> Witamy w restauracji „Wszystkie Smaki”</h1>
</div>
<div id="lewy">
<img src="menu.jpg" alt="Nasze danie">
</div>
<div id="prawy">
<h4>U nas dobrze zjesz!</h4>
<ul>
<li> Obiady od 40 zł</li>
<li> Przekąski od 10 zł</li>
<li> Kolacje od 20 zł</li>
</ul>
</div>
<div style="claer: both"></div>
<div id="dolny">
<h2>„Zarezerwuj stolik on-line</h2>
<form action="rezerwacja.php" method="post">
„Data (format rrrr-mm-dd)<br> <input type="text" id="data" name="data" ><br/>
Ile osób?” <br> <input type="number" id="osoby" name="osoby" ><br/>
Twój numer telefonu: <br> <input type="text" id="tel" name="tel" ><br/>
<input type="checkbox" name="check" />Zgadzam się na przetwarzanie moich danych osobowych<br>
<input type="reset" value="WYCZYŚĆ" />
<input type="submit" name="zamowienie" value="Wyślij">
</form>

</div>
<div id="stopka">
Stronę internetową opracował Jakub Frańczyk
</div>
</body>
</html>