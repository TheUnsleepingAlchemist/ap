<?php
    $link = mysql_connect("localhost", "root", "krasnal")
        or die ("Nie mo�na si� po��czy�");
    print ("Connected successfully");
    mysql_select_db ("mpk")
        or die ("Nie mozna wybra� bazy danych");

    $query = "SELECT * FROM pracownicy";
    $wynik = mysql_query ($query)
        or die ("Zapytanie zako�czone niepowodzeniem");

	// printing HTML result

	print "<table border=2>\n";
	while ($line = mysql_fetch_array($wynik)) {
	    print "\t<tr>\n";
	    while(list($col_name, $col_value) = each($line)) {
	        print "\t\t<td>$col_value</td>\n";
	    }
	    print "\t</tr>\n";
	}
	print "</table>\n";

    mysql_close($link);
?>

