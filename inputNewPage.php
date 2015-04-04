<html>

<head>
        <title>Enter Page Information</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container" style="width: 1024px">
        
<div class="row">
    <div class="col-xs-12">
        <div class="page-header">
            <!-- Header -->
            <h1>City Builders</h1>
        </div>
    </div>  
</div>

<form>

<div class="container">
<div class="col-xs-4">
    <form action="inserttables.php" method="post" enctype="multipart/form-data">
    <div class ='form-group'>
        <label for "urlTitle">Url Title</label>
        <input type = 'url' class="form-control" name="urlTitle"/>
    </div>
    
    <div class ='form-group'>
        <label for "pageTitle"> Page Title</label>
        <input type = 'text' class="form-control" name="pageTitle"/>
    </div>
    
     <div class ='form-group'>
        <label for "menuTitle"> Menu Title</label>
        <input type = 'text' class="form-control" name="menuTitle"/>
    </div>
    
    <div class ='form-group'>
        <label for "parent"> Parent</label>
        <input type = 'text' class="form-control" name="parent"/>
    </div>
    
     <div class ='form-group'>
        <label for "bodyTitle"> Body Title</label>
        <input type = 'text' class="form-control" name="bodyTitle"/>
     </div>
        
     <div class ='form-group'>
        <label for "body"> Body</label>
        <input type = 'text' class="form-control" name="body"/>
     </div>
     
    <br><br>
    <input type="submit" value="Submit">

    </form>
</div>

</body>
</html>
