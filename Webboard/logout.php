<?php
    include("db.php");
    session_start();
    if(session_destroy()){
        // close connection to database
        mysqli_close($con);
        header("Location: login.php");
    }

?>