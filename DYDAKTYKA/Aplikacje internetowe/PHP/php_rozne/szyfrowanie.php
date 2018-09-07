<?php
$form = $_POST['formularz'];
$hash = sha1($form);
echo ($hash);
?>