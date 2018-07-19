<?php
//tworzymy plik cookie o nazwie user oraz haslo, wartościach Marian, jegoHaslo i czasie istnienia 1h = 3600 sekund
setcookie("user", "Marian", time()+3600);
setcookie("haslo", "jegoHaslo ", time()+3600);

//Wyświetlamy zawartość naszych ciasteczek
echo $_COOKIE['user'];
echo $_COOKIE['haslo'];

//A w taki sposób usuwamy ciasteczka z komputera użytkownika
//setcookie("user", "", time());
//setcookie("haslo", "", time());
?>
