<html>

<head>
    <title>City Site Builder</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
    
</head>

<body>
    
    <?php
	include_once("util.php");
	include_once("config.php");
	
	session_start();
	if (!isset($_SESSION['userName'])) {
	    // if this variable is not set, then kick user back to login screen
	    header("Location: login.php");
	}
	
	// get a handle to the database
	$db = connect($dbHost, $dbUser, $dbPassword, $dbName);
	
	$query = "select artistID, artistName from artists order by artistName;";
	
?>
    
<div class="container" style="width: 1024px">

<div class="row">
    <div class="col-xs-12">
        <div class="page-header">
            <!-- Header -->
            <h1>Site Bulider Main Menu</h1>
        </div>
    </div>  
</div>

<div class="row">
<div class="col-xs-12">
    <p>Options, yada, yda, yada</p>
    <p><a href="inputUser.php">Create a new authorized user</a></p>
    <p><a href="inputNewPage.php">Create a new page</a></p>
    <p><a href="pages.php">Edit Existing pages</a></p>
    <br><br><br><p><a href="logout.php">Logout</a></p>
</div> <!-- close column -->
</div> <!-- close row -->
</div> <!-- container -->



</body>