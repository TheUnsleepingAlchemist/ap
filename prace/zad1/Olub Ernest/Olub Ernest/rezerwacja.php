 <html>
 <head>
 </head>
 <body>
 Dodano rezerwację do bazy
 <?
	$serwer="localhost";
	$login="root";
	$haslo="";
	$baza="baza";
 $connect = mysqli_connect($localhost, $login, $haslo, $baza);

 $data=$_POST['data'];
 $liczba=$_POST['ile'];
 $telefon=$_POST['telefon'];

 $query = mysqli_query($connect, "insert into rezerwacje values('$data', '$liczba', '$telefon')");


 $koncz=mysqli_close
 ?>
 </body>
