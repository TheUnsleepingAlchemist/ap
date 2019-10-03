<!DOCTYPE HTML>

<head>
<meta charset="utf-8">
<title>Restauracja Wszystkie Smaki</title>
<link href="styl1.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="baner">
<h1>Witamy w restauracji "Wszystkie Smaki"</h1>
</div>

<div class="lewy">
<img src="menu.jpg" alt="Nasze danie">
</div>

<div class="prawy">
<h4>U nas dobrze zjesz!</h4>

<ul>
<li>Obiady od 40zł</li>
<li>Przekąski od 10zł</li>
<li>Kolacje od 20zł</li>
</ul>

</div>

<div class="dolny">
<h2>Zarezerwuj stolik on-line</h2>

<form action = "rezerwacja.php" method="POST">
 Data (format rrrr-mm-dd)<br>
 <input type="text" name="data"><br>
 Ile osób?<br>
 <input type="number" name="osoby"><br>
 Twój numer telefonu<br>
 <input type="text" name="numer"><br>
 <input type="checkbox" name="dane">
 Zgadzam się na przetwarzanie moich danych osobowych<br>
 <input type="reset" name="reset" value="WYCZYŚĆ">
 <input type="submit" name="submit" value="REZERWUJ">
</form>

</div>

<div class="stopka">
Strone internetową opracował: <a>Marcin Pląsek</a>
</div>

</body>

</html>
