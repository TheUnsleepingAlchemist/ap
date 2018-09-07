<?php
	
	function logowanie(&$logowanie_click)
	{
		$logowanie_click=false;
		if (!isset($_POST['zaloguj'])) return ''; else $logowanie_click=true;
		if (isset($_SESSION['login']))
		{
			if ($_SESSION['login']!='') return 'Jesteś zalogowany!';
		}
		
		$login=trim($_POST['login']);
		$haslo=trim($_POST['haslo1']);
		if (empty($login) || empty($haslo)) return 'Brak loginu lub hasła!';
		
		@ $baza=new mysqli('localhost','root','','ksiegarnia');
		if (mysqli_connect_errno()) return 'Brak połączenia z MySQL!';

		$haslo=sha1($haslo);
		$zapytanie="select * from hasla where login='$login' and haslo='$haslo'";
		$wynik=$baza->query($zapytanie);
		$ile_znaleziono=$wynik->num_rows;
		if ($ile_znaleziono>0) 
		{
			$_SESSION['login']=$login;
			return 'Logowanie przebiegło pomyślnie'; 
		}
		else return 'Podałeś błędny login lub hasło!';    
	}
		
	function zarejestruj(&$zarejestruj_click)
	{
		$zarejestruj_click=false;
		if (!isset($_POST['zarejestruj'])) return ''; else $zarejestruj_click=true;
		if (isset($_SESSION['login']))
		{
			if ($_SESSION['login']!='') return 'Jesteś zalogowany! Najpierw się wyloguj';
		}
		$login=trim($_POST['login']);
		$haslo1=trim($_POST['haslo1']);
		$haslo2=trim($_POST['haslo2']);
		if (empty($login) || empty($haslo1) || empty($haslo1)) return 'Brak loginu lub hasła!';
		if ($haslo1!=$haslo2) return 'Podane hasła nie są jednakowe!';

		@ $baza=new mysqli('localhost','admin','admin123','ksiegarnia');
		if (mysqli_connect_errno()) return 'Brak połączenia z MySQL!';

		$zapytanie="select * from hasla where login='$login'";
		$wynik=$baza->query($zapytanie);
		$ile_znaleziono=$wynik->num_rows;
		if ($ile_znaleziono>0) return 'Podany login już istnieje! Podaj inny login';

		$haslo=sha1($haslo1);
		$zapytanie="select * from hasla where haslo='$haslo'";
		$wynik=$baza->query($zapytanie);
		$ile_znaleziono=$wynik->num_rows;
		if ($ile_znaleziono>0) return 'Podane hasło już istnieje! Podaj inne hasło';
			
		$zapytanie = "insert into hasla values (null,'".$login."', '".$haslo."')";
		$wynik = $baza->query($zapytanie);
		if ($wynik) 
		{
			if ($baza->affected_rows==1); 
			$_SESSION['login']=$login;
			return 'Zostałeś zarejestrowanym użytkownikiem';
		}
	}	
	
	function wyloguj()
	{
		if (!isset($_POST['wyloguj'])) return '';
		if (!isset($_SESSION['login'])) return 'Nie jesteś zalogowany!';
		if ($_SESSION['login']=='') return 'Nie jesteś zalogowany!';
		$_SESSION['login']='';
		return 'Zostałeś wylogowany';
	}
	
	
?>