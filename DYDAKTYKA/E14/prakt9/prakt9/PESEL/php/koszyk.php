<?php
	require_once('rozne.php');

	function do_koszyka(&$do_koszyka)
	{
		$do_koszyka=array();
		if (!isset($_POST['ksiazki'])) return false;
		$isbns=$_POST['ksiazki']; if (count($isbns)==0) return false;
		if (!ksiazki($wszystkie_ksiazki)) return false;
		
		$i=-1;
		foreach($isbns as $isbn)
		{
			$j=-1;
			foreach($wszystkie_ksiazki as $ksiazka)
			{
				$j++;	
				if ($ksiazka['isbn']==$isbn)
				{
					$i++;	
					$do_koszyka[$i]['tytul']=$ksiazka['tytul'];	
					$do_koszyka[$i]['autor']=$ksiazka['autor'];	
					$do_koszyka[$i]['isbn']=$ksiazka['isbn'];	
					$do_koszyka[$i]['cena']=$ksiazka['cena'];	
									
					$sztuk_klucz='sztuk'.$j;
					$ilosc=$_POST["$sztuk_klucz"];
					$do_koszyka[$i]['sztuk']=$ilosc;	
					break;
				}
			}
		}
		return true;
	}
	
	function w_koszyku()
	{
		if (!do_koszyka($do_koszyka)) return;
		
		if (!isset($_SESSION['koszyk']) || count($_SESSION['koszyk'])==0) 
		{
			$_SESSION['koszyk']=$do_koszyka;
			return;
		}
		foreach($do_koszyka as $ksiazka_do)
		{
			$jest_w_koszyku=false;
			$i=-1;
			foreach ($_SESSION['koszyk'] as $ksiazka_w)
			{
				$i++;
				if ($ksiazka_do['isbn']==$ksiazka_w['isbn'])
				{
					$_SESSION['koszyk'][$i]['sztuk']+=$ksiazka_do['sztuk'];
					$jest_w_koszyku=true;
					break;
				}
			}
			if (!$jest_w_koszyku)
			{
				$i=count($_SESSION['koszyk']);
				$_SESSION['koszyk'][$i]['tytul']=$ksiazka_do['tytul'];	
				$_SESSION['koszyk'][$i]['autor']=$ksiazka_do['autor'];	
				$_SESSION['koszyk'][$i]['isbn']=$ksiazka_do['isbn'];	
				$_SESSION['koszyk'][$i]['cena']=$ksiazka_do['cena'];	
				$_SESSION['koszyk'][$i]['sztuk']=$ksiazka_do['sztuk'];	
			}		
		}		
	}
	
	function zamawiam()
	{
		if (!isset($_POST['zamawiam'])) return;
		if (!isset($_SESSION['koszyk']) || count($_SESSION['koszyk'])==0) return;
		$koszyk=$_SESSION['koszyk'];
		
		@ $baza=new mysqli('localhost','admin','admin123','ksiegarnia');
		if (mysqli_connect_errno()) 
		{
			echo 'Zamówienie nie zostało przyjęte, ponieważ nie udało się połączyć z bazą danych!';
			return;
		}

		foreach ($koszyk as $ksiazka)
		{
			$sztuk_zamowionych=$ksiazka['sztuk'];
			$isbn=$ksiazka['isbn'];
			$zapytanie="update ksiazki set stan=stan-'$sztuk_zamowionych' where isbn='$isbn'";
			$wynik=$baza->query($zapytanie);
			if (!$wynik || $baza->affected_rows==0) echo 'Wystąpiły błędy podczas realizacji zamówienia!';
		}

		$_SESSION['koszyk']=array();
		echo '<p style="margin-left:20px;">Dziękujemy za zakupy w naszym sklepie, Twoje zamówienie zostało przesłane do realizacji</p>';
	}

	function wyczysc_koszyk()
	{
		if (!isset($_POST['wyczysc'])) return;
		$_SESSION['koszyk']=array();
	}
	
	function pokaz_koszyk()
	{
		if (!isset($_SESSION['koszyk']) || count($_SESSION['koszyk'])==0) 
		{
			echo '<p style="margin-left:20px;">Twój koszyk jest pusty!</p>';
			return; 
		}
		$ksiazki=$_SESSION['koszyk'];
		
		$suma=0;
		echo
		'<form action="" method="post">
			<table>
				<tr>
					<th>Tytuł</th><th>Autor</th><th>ISBN</th><th>Cena (zł)</th><th>Sztuk</th><th>Wartość</th>
				</tr>';
				$i=-1;
				foreach($ksiazki as $ksiazka)
				{
					$i++;
					$wartosc=$ksiazka['cena']*$ksiazka['sztuk'];
					$suma+=$wartosc;
					echo
					'<tr>
						<td>'
							.$ksiazka['tytul'].'
						</td>
						<td>'
							.$ksiazka['autor'].'
						</td>
						<td>'
							.$ksiazka['isbn'].'
						</td>
						<td>'
							.$ksiazka['cena'].'
						</td>
						<td>'
							.$ksiazka['sztuk'].'
						</td>
						<td>'
							.$wartosc.'
						</td>
					</tr>';
				}
			echo
			'</table>
			<p style="margin-left:20px;">Wartość książek w koszyku - '.$suma.' zł</p> 
			
			<input type="submit" name="zamawiam" value="Zamawiam"  style="margin-left:10px;" />
			<input type="submit" name="wyczysc" value="Usuń towary z koszyka" />
		</form>';

	}
	
?>