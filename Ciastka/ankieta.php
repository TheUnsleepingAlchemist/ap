<?php
if (isset($_COOKIE['login']))
  {
    echo '<form action="" method="POST">
            Logowanie<br />
            Login <input type="text" value="'.$_COOKIE['login'].'"><br />
            Hasło <input type="password"><br />
            <input type="submit" value="Zaloguj"><br />
          </form>';
  }
   else
       {
        echo '<form action="" method="POST">
                Logowanie<br />
                Login <input type="text" name="login"><br />
                Hasło <input type="password"><br />
                <input type="submit" value="Zaloguj"><br />
              </form>';
        setcookie('login', $_POST['login'], time()+30);
       }
?>
