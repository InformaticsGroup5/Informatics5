<html>

<head>
	<title>New User Registration</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>


<body>
	
	
<?php
	include_once("util.php");
	include_once("config.php");
	
	// get a handle to the database
	$db = connect($dbHost, $dbUser, $dbPassword, $dbName);
	
?>
	
<div class="container">

<!-- Header -->
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>New User Registration</h1>
		</div>
	</div>
</div>

<!-- Form -->
<div class="row">
	<div class="col-xs-12">
<form action="insertUser.php" method="post">
	
	<div class="form-group">
		<label for="userName">username</label>
		<input type="text" class="form-control" name="userName"/>
	</div>
	
	<div class="form-group">
		<label for="password">password</label>
		<input type="password" class="form-control" name="password"/>
	</div>
	
	<button type="submit" class="btn btn-default">Add</button>
</form>
	</div>
</div>

<!-------------------------->
<!------- List data -------->
<!-------------------------->
<div class="row">
	<div class="col-xs-12">
		<h2>Registered Users</h2>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
<table class="table table-hover">
	<!--- Titles for the table --->
	<thead>
	<tr>
		<th>UserName</th>
		<th>Full Name</th>
	</tr>
	</thead>
<?php
	// prepare a sql statement to get all the records in the people table
	$query2 = 'SELECT userName FROM usertable ORDER BY userName;';
	
	// execute the sql statement
	$result2 = $db->query($query2);
	
	if ($result2) {
		$numberOfRows2 = $result2->num_rows;
		
		for($i=0; $i < $numberOfRows2; $i++) {
			$row = $result2->fetch_assoc();
			echo '<tr>';
			echo '<td>' . $row['userName'] . '</td>';
			echo '</tr>';
		}
	} else {
		echo ('Unable to get listing of users.<br/>');
		die();
	}
?>
	
</table>
	</div>
</div>


</div>
</body>


</html>