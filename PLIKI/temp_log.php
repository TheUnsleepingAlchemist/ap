<?php
  if(!isset($_POST['name'])) {
    $_POST['name'] = "";
  }

  if(!isset($_POST['password'])) {
    $_POST['password'] = "";
  }

  $name = $_POST['name'];
  $password = $_POST['password'];

  $file = fopen("file.txt", "a");
  fputs($file, $name . ":" . $password . "\n");
  fclose($file);

  echo "User added!";
?>


<?php
  session_start();

  if(!isset($_POST['name'])) {
    $_POST['name'] = "";
  }

  if(!isset($_POST['password'])) {
    $_POST['password'] = "";
  }

  $name = $_POST['name'];
  $password = $_POST['password'];

  $file = file("file.txt", FILE_IGNORE_NEW_LINES);

  foreach($file as $line) {
    list($saved_name, $saved_password) = explode(":", $line);

    if($name == $saved_name && $password == $saved_password) {
      echo "You have successfully logged in.";

      $saved_name = ucfirst($saved_name);
      $_SESSION['logged_in'] = $saved_name;
    }
  }
?>
/////////////////////////////////////////////////////////////////////////////
/Formularz html umożliwiający wprowadzenie loginu i hasła
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<TITLE>Logowanie</TITLE>
</HEAD>
<BODY>
<CENTER>
<H2>Wprowadź nazwę użytkownika i hasło:</H2>
<FORM NAME = "formularz1"
      ACTION = "login.php"
      METHOD = "POST"
>
<TABLE border="1"><TR>
<TD bordercolor="#FFFFFF">Użytkownik:</TD>
<TD bordercolor="#FFFFFF">
  <INPUT TYPE="text" NAME="user">
</TD>
</TR><TR>
<TD bordercolor="#FFFFFF">Hasło:</TD>
<TD bordercolor="#FFFFFF">
  <INPUT TYPE="password" NAME="haslo">
</TD>
</TR><TR>
<TD COLSPAN="2"
    ALIGN="center"
    BORDERCOLOR="#FFFFFF"
>
  <INPUT TYPE="submit" VALUE="Wejdź">
</TD>
</TR></TABLE>
</FORM>
</CENTER>
</BODY>
</HTML>


//Skrypt weryfikujący dane login.php

<?PHP


function checkPass($user, $pass)
{
  if(!$fd = @fopen("passwords.txt", "r")) return false;
  while (!feof ($fd)){
    $line = trim(fgets($fd));
    if(($pos = strpos($line, ":"))===false) continue;

    $tempUser = substr($line, 0, $pos);
    if($tempUser != $user) continue;

    $tempPass = substr($line, $pos + 1, strlen($line) - $pos);

    if($tempPass != $pass) continue;
    else{
      fclose($fd);
      return true;
    }
  }
  fclose($fd);
  return false;
}
if(!isSet($_POST["haslo"]) || !isSet($_POST["user"])){
  include('error.html');
  exit();
}
if(checkPass($_POST["user"], $_POST["haslo"])){
  include('index1.html');
}
else{
  include('error.html');
}
?>
