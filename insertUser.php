<html>

<head>
	<title>New User</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>

<div class="container">

<!-- Header -->
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>New User</h1>
		</div>
	</div>
</div>

<?php
	include_once('config.php');
	include_once('util.php');
	
	//get data from fields
	$userName = $_POST['userName'];
        $hashedPass = crypt($_POST['password']);
        
	// check if we have user name
	if (!$userName) {
		echo('Please enter an user name. <a href="inputUser.php">Try again</a>.<br/>');
		die();
	}
        
        // check if we have a password
	if (!$hashedPass) {
		echo('Please enter a password. <a href="inputUser.php">Try again</a>.<br/>');
		die();
	}
	
	// get a handle to the database
	$db = connect($dbHost, $dbUser, $dbPassword, $dbName);

	// check if userName is already in the userPassword table
	$userCheckQuery = 'SELECT * FROM usertable WHERE userName="' . $userName . '";';
	
	// execute sql statement
	$result = $db->query($userCheckQuery);
	
	if ($result) {	
		$numberOfRows = $result->num_rows;
		if ($numberOfRows > 0) {
			echo('The username ' . $userName . ' already exists in the database.<br/>' .
			'Please <a href="input.php">try again</a>.<br/>');
			die();
		}
	}
	else {
		echo('Unable to check whether userName exists in userPassword table.<br/>' . 
			$db->error . '<br/>');
		die();
	}

	// generate query to insert data
	$query = 'INSERT INTO usertable (userName, hashedPass) values ("' .
		$userName . '", "' . $hashedPass . '");';
	
	// execute sql statement
	$result = $db->query($query);
	
	if ($result) {
		echo ('<p>');
		
		echo ('You were added to the database as: <br/>');
		
		echo ('User Name: ' . $userName . '<br/>');
		
		echo ('Full Name: ' . $usersFullName . '<br/>');
		
		echo ('</p> <a href="login.php">Back to Login</a>');
	} else {
		echo ('We were not able to add you to the database. <br/>');
		echo ('This was the error: ' . $db->error);
	}
?>
</html>