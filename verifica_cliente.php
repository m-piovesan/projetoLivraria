<?php

    session_start();
    if (!isset($_SESSION['clienteId'])){
        $_SESSION['msg'] = "SAIA HACKER";
        header("Location:login.php");
    }

?>