<?php
	// connect to the database
	function connect($dbHost, $dbUser, $dbPassword, $dbName) {
		// the @ sign supresses errors, which we handle in the next line
		@ $db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
		
		// check for errors connecting to the database
		if ($db->connect_errno) {
			echo ('Oops! There was a problem connecting to the database. <br/> This was the error we found: ' .
				$db->connect_error . '<br/>');
			die();
		}
		
		return $db;
	}
?>