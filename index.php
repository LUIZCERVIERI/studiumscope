<?php
    session_start();

    if(isset($_SESSION['usuario_id'])) {
        header("Location: home.php");
        exit;
    }
    else{
        header("Location: authController.php?acao=login");
        exit;
    }

?>