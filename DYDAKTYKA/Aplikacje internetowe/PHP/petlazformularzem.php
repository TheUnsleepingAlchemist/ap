<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pętla</title>
  </head>
  <body>
    <form action="" method="post">
      Wprowadź tekst<input type="text" name="text" value=""><br>
      Ile razy powtórzyć?<input type="text" name="ilosc" value=""><br>
      <input type="submit" name="" value="Wykonaj"><br>
    </form>
    <?php
        $text=$_POST['text'];
        $ile=$_POST['ilosc'];
        for ($i=0; $i<$ile; $i++)
          {echo $text."<br>";}
     ?>
  </body>
</html>
