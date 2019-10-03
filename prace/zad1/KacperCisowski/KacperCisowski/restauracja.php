<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Restauracja Wszystkie Smaki</title>
    <link rel="stylesheet" type="text/css" href="styl1.css">
</head>
<body>
    <header>
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </header>
    <main>
        <section>
            <div id="left">
                <img src="menu.jpg" alt="Nasze danie">
            </div>
        </section>
        <section>
            <div id="right">
                <h4>U nas dobrze zjesz!</h4>
                <ol>
                    <li>Obiady po 40zł</li>
                    <li>Przekąski od 10zł</li>
                    <li>Kolacje od 20zł</li>
                </ol>
            </div>
        </section>
        <section>
            <div id="bottom">
                <h2>Zarezerwuj stolink on-line</h2>
                
                <?php

                $conn = mysqli_connect("localhost", "root", "", "baza");
                    if (mysqli_connect_errno()) {
                        echo "Polaczenie z MySQL nie powiodlo sie: " . mysqli_connect_error();
                }
                
                ?>
                
                <form method="POST" action="">
                    <p>Data (format rrrr-mm-dd):</p>
                    <input type="date" name="data">
                    <p>Ile osób?</p>
                    <input type="number" name="osoby">
                    <p>Twój numer telefonu:</p>
                    <input type="text" name="numer">
                    <p><input type="checkbox">
                    Zgadzam się na przetwarzanie moich danych osobowych</p>
                    <input type="reset" value="WYCZYŚĆ">
                    <input type="submit" value="REZERWUJ" name="rezerwuj">
                    
                    <?php
                    
                    @ $data = $_POST['data'];
                    @ $osoby = $_POST['osoby'];
                    @ $numer = $_POST['numer'];
                    @ $rezerwuj = $_POST['rezerwuj'];
                    
                    if(isset($rezerwuj)) {

                        $zapytanie = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ($data, $osoby, $numer)";
                        
                        if($conn->query($zapytanie) == TRUE) {
                            echo "<br>Dodano rezerwację do bazy";
                        }
                    }
                    
                    mysqli_close($conn);
                    ?>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>Stronę internetową opracował: <i>Kacper Cisowski 4Ti</i></p>
    </footer>
</body>
</html>