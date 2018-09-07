<?php
	function uzytkownik()
	{
		if (!isset($_SESSION['login'])) return 'brak';
		if ($_SESSION['login']=='') return 'brak';
		return $_SESSION['login'];
	}	
	
	function ksiazki(&$ksiazki)
	{    
		$ksiazki=array();
		@ $baza=new mysqli('localhost','admin','admin123','ksiegarnia');
		if (mysqli_connect_errno()) return false;

		$baza->query('SET NAMES utf8');
		$zapytanie = "select * from ksiazki";
		$wynik = $baza->query($zapytanie);
		$ile_znaleziono = $wynik->num_rows; 
		if ($ile_znaleziono==0) return false;
		for ($i=0;$i<$ile_znaleziono;$i++)
		{
			$wiersz=$wynik->fetch_assoc(); 
			$ksiazki[$i]['tytul']=$wiersz['tytul'];
			$ksiazki[$i]['autor']=$wiersz['autor'];
			$ksiazki[$i]['isbn']=$wiersz['isbn'];
			$ksiazki[$i]['cena']=$wiersz['cena'];
			$ksiazki[$i]['stan']=$wiersz['stan'];
		}	
		return true;
	}
	
?>