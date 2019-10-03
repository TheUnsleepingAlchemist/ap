<html>
<head>
    <meta charset="utf-8">
    <title>Restauracja Wszystkie Smaki</title>
    <link rel="stylesheet" href="styl1.css">
  </head>
    <body>
        <?php
        @$data=$_POST['data'];
        @$osoby=$_POST['osoby'];
        @$telefon=$_POST['telefon'];   
            
            $polaczenie=mysqli_connect('localhost','root','','baza')
            or die("brak polaczenia")
                ?>
    
<div id="baner">
    <h1>Witamy w restauracji „Wszystkie Smaki”</h1>
    </div>
    
<div id="lewy">
    <img src="menu.jpg">
         </div>
    
<div id="prawy">
    <h4>U nas dobrze zjesz</h4>
        
    <ul>
        <li>Obiady od 40zł</li>   
    <li>przekąski od 10zł</li>        
    <li>kolacje od 20zł</li>    
        </ul>
    </div>
    
<div id="dol">
    <h2>„Zarezerwuj stolik on-line”</h2>
    <form action="POST">
    
        Data (format rrr-mm-dd);<br>
<input type="text" name="data"><br><br>
        Ile osób?<br>
<input type="number" name="osoby"><br><br>
        numer telefonu<br>
<input type="text" name="telefon"><br>
        Zgadzam sie na przetwarzanie moich danych<input type="checkbox"><br>
        
<input type="button" name=" Rezerwacja" value="Rezerwacja">
        
<input type="button" name=" wyczyść", value="wyczyść">        
    
    
    </form>
    
    </div>
    
<div id="stopka">
    
    </div>
    
    </body>