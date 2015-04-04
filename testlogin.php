<?php
    include_once("config.php");
    
    session_start();
    if (!isset($_SESSION['userName'])) {
        // if this variable is not set, then kick user back to login screen
        header("Location: login.php");
    }
?>

<html>
    <head>
        <title>Logged in</title>
    </head>
    <body>
        <p>
        Yes, you are logged in! Thanks <?php echo $_POST['username']?>.
        </p>
        
        <p>
            <a href="logout.php">log out</a>.
        </p>
    </body>
</html>