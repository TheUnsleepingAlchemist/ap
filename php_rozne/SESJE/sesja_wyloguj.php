<?php

session_start();

if (!isset($_SESSION['login']))
{
    $_SESSION['login'] = "Kazek";
    echo "Zalogowano jako". $_SESSION['login'];
}
echo "<form method='POST'><input type='submit' value='wyloguj' </form>";


?>
