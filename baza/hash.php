<form action="" method="POST">
  <input type="text" name="formularz">
  <input type="submit" value="Wyświetl">
</form>
<?php
$form = $_POST['formularz'];
$hash = sha1($form);
echo ($hash);
?>
