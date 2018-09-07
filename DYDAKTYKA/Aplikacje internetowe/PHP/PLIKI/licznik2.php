<?php
 
        session_start(); // 1
        
        if(!isset($_SESSION['licznik'])) // 2
        {
                $_SESSION['licznik'] = 0;
        }
        
        $_SESSION['licznik']++; // 3
        
        echo 'Odwiedziles ju¿ '.$_SESSION['licznik'].' podstron!'; // 4
 
?>
