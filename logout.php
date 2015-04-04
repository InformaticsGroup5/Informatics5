<?php
    // unset server variable that says we are logged in and send user to login screen
    include_once("config.php");
    
    session_start();
    if (isset($_SESSION['userName'])) {
        unset($_SESSION['userName']);
    }
    session_destroy(); 
    
    // redirect user to login page
    header("Location: login.php");
?>