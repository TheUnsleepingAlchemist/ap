<?php
if (count($_POST))
{
	////////// USTAWIENIA //////////
	$email = 'zst.sko@gmail.com';	// Adres e-mail adresata
	$subject = 'Absolwenci';	// Temat listu
	$message = 'Dziêkujemy za wype³nienie ankiety.';	// Komunikat
	$error = 'Wyst±pi³ b³±d podczas wysy³ania formularza';	// Komunikat b³êdu
	$charset = 'iso-8859-2';	// Strona kodowa
	//$charset = 'iso-8859-2';	// Strona kodowa
	//////////////////////////////
	
	$head =
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/plain; charset=$charset\r\n" .
		"Content-Transfer-Encoding: 8bit";
	$body = '';
	foreach ($_POST as $name => $value)
	{
		if (is_array($value))
		{
			for ($i = 0; $i < count($value); $i++)
			{
				$body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i]) . "\r\n";
			}
		}
		else $body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value) : $value) . "\r\n";
	}
	echo mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head) ? $message : $error;
}
else
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" >
<style type="text/css">
      body {background-image: wwwzst.jpg;}
      h1 { color: #000000;
	   background-color: #99CCFF;
	   text-align: center;
         }
	  h2 {text-align: center;}
	  h3 {text-align: center;}
	  h4 {text-align: left;
	       margin-left: 10cm;}
    </style>

</head>
<body bgcolor="CCCCCC">

<h1>Ankieta dla absolwentów </h1>
<table>
<tr><td>
<h3>Zapraszamy do wype³nienia ankiety dotycz±cej losów absolwentów szko³y</h3>
<h3>Zespó³ Szkó³ Technicznych im. Armii Krajowej</h3>
<h3>Tysi±clecia 22, Skar¿ysko-Kamienna</h3>
</td>
<td><img src=logozst.gif width=150 height=150></td>
</tr>
</table>
<form action="?" method="post">
<hr>
<h3>Podaj imiê:
<input name="imie" type="text">
nazwisko:
<input name="nazwisko" type="text">
<br>Jak± szko³ê skoñczy³e¶:
<input name="szkola" type="text"> 
rok ukoñczenia:
<input name="rok" type="text"> 
</h3>
<hr>
<h4>
<br>Twój e-mail (opcjonalnie):
<input name="mail" type="text">
</h4>
<hr>
<TABLE border=1 align="center">
<TR>
<TD width="220" height="220">
Co teraz robisz?
<br><input type="checkbox" name="nauka" value="Uczê siê " /> Uczê siê  
<br><input type="checkbox" name="zawod" value="Pracujê w wyuczonym zawodzie" /> Pracujê w wyuczonym zawodzie
<br><input type="checkbox" name="pracainna" value="Pracujê w innym zawodzie" /> Pracujê w innym zawodzie
<br><input type="checkbox" name="bezrobocie" value="Jestem bezrobotny" /> Jestem bezrobotny
<br><textarea name="inni" cols="50" rows="10" value="inni"> Napisz co robia Twoi koledzy z klasy</textarea>
</TD>
<TD width="220" height="220">
Czy wiedza i umiejêtno¶ci zdobyte w szkole pomog³y Ci na studiach i w pracy?
<br><input type="checkbox" name="nauka" value="Czy wiedza pomog³a ci w pracy " /> Tak  
<br><input type="checkbox" name="zawod" value="Wiedza w zadawalaj±cym stopniu pomog³a mi " /> W zadawalaj±cym stopniu
<br><input type="checkbox" name="pracainna" value="Wiedza w ma³ym stopniu pomog³a mi" /> W ma³y stopniu
<br><input type="checkbox" name="bezrobocie" value="Wiedza nie pomog³a mi " /> Nie
<br><textarea name="uwagi" cols="50" rows="10" value="Uwagi"> Napisz uwagi</textarea>
</TD>
</TR>
</TABLE>
<hr>
<br><center><input name="wyslij" type="submit" value="PRZE¦LIJ ANKIETÊ" ></center>
</form>
</body>
</html>
<?php
}
?>