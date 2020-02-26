<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cwiczenie</title>
  </head>
  <body>
    <form action="" method="post">
      Index:<input type="text" name="id" value=""><br>
      Nazwa:<input type="text" name="nazwa" value=""><br>
      <input type="submit" name="p1" value="Wykonaj">
    </form>
    <?php
      $id=$_POST['id'];
      $nazwa=$_POST['nazwa'];

      $polaczenie=mysqli_connect('localhost', 'root', '', 'test')
      or die ("Błąd połączenia z bazą");
      $wynik=mysqli_query($polaczenie, "insert into dane values('$id', '$nazwa')");
      $zapytanie=mysqli_query($polaczenie, "select * from dane");

      while ($rekord=mysqli_fetch_assoc($zapytanie))
       {echo $rekord['indeks']." -> ".$rekord['nazwa']."<br>";
       }


      //mysqli_free_result($wynik);
      mysqli_close($polaczenie);
     ?>
  </body>
</html>
