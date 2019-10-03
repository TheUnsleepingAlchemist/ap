<body>
  <form action="lista_plikow.php" method="post">
    <input type="submit" name="submit"  value="Pokaż pliki" />
    <input type="submit" name="clear"  value="Wyczyść" />
  </form>
  <br />
  <?php
    if (!isset($_POST['submit'])) exit;
    @$pliki=scandir(getcwd());
    if (!$pliki) echo 'Wystąpiły błędy';
    else if (count($pliki)===0) echo 'Brak plików';
    else
    {
      foreach($pliki as $nazwa)
      if($nazwa != '.' && $nazwa != '..' )
      echo $nazwa.'<br />';
    }
  //echo file_put_contents("test.txt","Hello World. Testing!");
  ?>
</body>


<!-- http://www.teacher.webd.pl/kurs_php/k_4_3_0.php -->
