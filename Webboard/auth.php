<?php
    session_start();
    // check username
     if (!isset($_SESSION['username'])){
        header("location: login.php");
        exit;
    }
?>