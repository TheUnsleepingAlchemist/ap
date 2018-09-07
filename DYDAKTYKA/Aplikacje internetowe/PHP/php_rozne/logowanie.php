<?php
 
        $uzytkownicy = array(1 =>
                array('login' => 'user1', 'haslo' => sha1('ppp')),
                array('login' => 'user2', 'haslo' => sha1('ddd')),
                array('login' => 'user3', 'haslo' => sha1('fff'))
        );
        
        function czyIstnieje($login, $haslo)
        {
                global $uzytkownicy;
                
                $haslo = sha1($haslo);
                
                foreach($uzytkownicy as $id => $dane)
                {
                        if($dane['login'] == $login && $dane['haslo'] == $haslo)
                        {
                                // O, jest ktos taki - zwroc jego ID
                                return $id;
                        }
                }
                // Je¿eli doszed³eœ a tutaj, to takiego u¿ytkownika nie ma
                return false;
        } // end czyIstnieje();

        session_start();
        
        if(!isset($_SESSION['uzytkownik']))
        {
                // Sesja siê zaczyna, wiec inicjujemy u¿ytkownika anonimowego
                $_SESSION['uzytkownik'] = 0;
        }

if($_SESSION['uzytkownik'] > 0)
        {
                // Ktos jest zalogowany
                echo 'Witaj, '.$uzytkownicy[$_SESSION['uzytkownik']]['login'].' na naszej stronie!';    
        }
        else
        {
// Niezalogowany
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                        if(($id = czyIstnieje($_POST['login'], $_POST['haslo'])) !== false)
                        {
                                // Logujemy uzytkownika, wpisal poprawne dane
                                $_SESSION['uzytkownik'] = $id;
                                echo 'Dziekujemy, zostales zalogowany! <a href="sesje_2.php">Dalej</a>';
                        }
                        else
                        {
                                echo 'Podales nieprawidlowe dane, zegnaj! <a href="sesje_2.php">Dalej</a>';
                        }               
                }
                else
                {
                        echo '<form method="post" action="logowanie.php">
                                Zaloguj sie: <input type="text" name="login"/>
                                <input type="password" name="haslo"/>
                                <input type="submit" value="OK"/></form>';              
                }       
        }
?>

