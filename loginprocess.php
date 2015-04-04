<?php
    include_once("util.php");
    include_once("config.php");
    include_once("testlogin.php");

    // get data from fields
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    // check that we have an username
    if (!$userName) {
        echo "Hey, you didn't type your username. Please <a href='input.php'>try again</a>";
        exit;
    }
    
        // check that we have an password
    if (!$password) {
        echo "No password received";
		exit;
    }
    
    // get a handle to the database
    $db = connect($dbHost, $dbUser, $dbPassword, $dbName);
    
    // get hashed password based on userName
    $query = "select hashedPass from usertable where userName='" . $userName . "'";
    $result = $db->query($query);
    if ($result) {
        $numberofrows = $result->num_rows;
        $row = $result->fetch_assoc();
        if ($numberofrows > 0) {
            $hashedPass = $row['hashedPass'];
            
            // check if the password matches the hashed version in the database
            // for version 5.5 or later we would use
            // if (password_verify($password, $hashedPass)) {
            if ($hashedPass == crypt($password, $hashedPass)) {
                // we have verified the password
                session_start();
                $_SESSION['userName'] = $userName;
                header("Location: main.php");
            } else {
                // wrong password
                reportErrorAndDie("Wrong password. <a href='login.php'>Try again</a>.<p>" . $db->error, $query);
            }
        } else {
            reportErrorAndDie("Username not in our system. <a href='login.php'>Try again</a>.<p>" . $db->error, $query);
        }
    } else {
        reportErrorAndDie("Could not run authorization.<p>" . $db->error, $query);
    }
    
?>