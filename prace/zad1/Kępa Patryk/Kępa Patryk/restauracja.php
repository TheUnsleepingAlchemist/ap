<html>
  <head>
    <meta charset="utf-8">
<title>Restauracja Wszystkie Smaki</title>
  <link rel="stylesheet" type="text/css" href="styl1.css"/>
  </head>
    <body>
    
        
    <div id="baner">
        <h1>Restauracja Wszystkie Smaki</h1>
        </div>
        
    <div id="lewy">
        <img src="menu.jpg">
        </div>
        
        <div id="prawy">
        U nas dobrze zjesz!
          <ul>
      <li>Obiady od 40 zł</li>
      <li>Przekąski od 10 zł</li>
      <li>Kolacje od 20 zł</li>
    </ul>  
        </div>
        
        <div id="dolny">
        Zarezerwuj stolik On-Line<br><br>
            <form action="rezerwacja.php" method="POST">
            
            Data  (format rrrr-mm-dd):<br>
<input type="text" name="data"><br><br>
                   Liczba Osób:<br>
<input type="number" name="osoby"><br><br>
                Numer Telefonu:<br>
<input type="text" name="phone"> <br>
                Zgadzam sie na przetwarzanie danych osobowych<input type="checkbox"><br>
<input type="submit" name="rezerwuj" value="Rezerwacja">
<input type="button" name="clean" value="Wyczysc">
                   </form>
        </div>
        
        <div id="stopka">
        
        </div>
        
        
    </body