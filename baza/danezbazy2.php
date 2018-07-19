<form action="" method="post">
<select name="dzial" onchange="this.form.submit()">
<option value="">Wybierz dzia³</option>
<option value="pracownicy">Pracownicy</option>
<option value="auta">Auta</option>
<option value="produkcja">Produkcja</option>
</select>
</form>

<?php

// parametry serwera
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";  // login do bazy
$haslo  = "krasnal";  // haslo do bazy
$baza   = "mpk";  // nazwa bazy

$dzial = $_POST['dzial'];
$A=$HTTP_POST_VARS['A'];

if($dzial) {
    
    // ³¹czymy siê z baz¹ danych
    if (mysql_connect($serwer, $login, $haslo) and mysql_select_db($baza)) {
        
        // zapytanie do bazy danych
        $wynik = mysql_query("SELECT * FROM $dzial")
        or die("B³¹d w zapytaniu!");
        
        mysql_close();
    }
    else echo "Nie mogê po³¹czyæ siê z baz¹ danych!";
    
    // wyœwietlany wyniki zapytania
   	print "<table border=2>\n";
	while ($line = mysql_fetch_array($wynik)) {
	    print "\t<tr>\n";
	    while(list($col_name, $col_value) = each($line)) {
	        print "\t\t<td>$col_value</td>\n";
	    }
	    print "\t</tr>\n";
	}
	print "</table>\n";
}

?>
