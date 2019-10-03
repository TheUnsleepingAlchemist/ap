<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="styl1.css">
    <title>Restauracja Wszystkie Smaki</title>
  </head>
  <body>
    <div id="baner">
      <h1>Witamy w restauracji „Wszystkie Smaki”</h1>
    </div>
    <div id="left">
      <img src="menu.jpg" alt="Nasze danie">
    </div>
    <div id="right">
      <h4>U nas dobrze zjesz!</h4><br>
      <ul>
        <li>Obiady od 40 zł</li>
        <li>Przekąski od 10 zł</li>
        <li>Kolacje od 20 zł</li>
      </ul>
    </div>
    <div id="bottom">
      <h2>Zarezerwuj stolik on-line</h2>
      <form action="rezerwacja.php" method="post">
        Data (format rrrr-mm-dd)<br>
        <input type="text" name="data"><br>
        Ile osób?<br>
        <input type="number" name="ilosc"><br>
        Twój numer telefonu:<br>
        <input type="text" name="telefon"><br>
        <input type="checkbox" name="checkbox" vale="1"> Zgadzam się na przetwarzanie moich danych osobowych<br>
        <input type="reset" value="WYCZYŚĆ"><input type="submit" name="rezerwacja" value="REZERWUJ">
      </form>
    </div>
    <div id="stopka">
      Stronę internetową opracował: <i>Kamil Nawrocki</i>
    </div>
  </body>
</html>