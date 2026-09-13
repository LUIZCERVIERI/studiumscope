<?php

    if(isset($_SESSION['usuario_id'])) {
        header("Location: home.php");
        exit;
    }
    else{
        header("Location: login.php");
        exit;
    }

?>