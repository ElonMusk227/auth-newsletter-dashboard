<?php
    function is_connected(): bool {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();    
        }
        $_SESSION['connected'] = 1;
       return !empty($_SESSION['connected']);
    }

    function forcer_utilisateur_connecte(): void {
        if(!is_connected()){
            header('Location:login.php'); 
            exit();
        }
    }
?>