<?php

    session_start();
    if (!isset($_SESSION['userId'])){
        $_SESSION['msg'] = "SAIA HACKER";
        header("Location:login.php");
    }

?>