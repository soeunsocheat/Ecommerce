<!DOCTYPE html>
<html>
<head>
    <title>Register New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="">
  	<meta name="author" content="">
  
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="css/full-slider.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	  	<div class="row">
	  	<h1 align="center">Add New Product</h1><hr><br>
	    	<div class="col-sm-4"></div>
	    	<div class="col-sm-4">
	    		<form class="navbar-form" action="process.php" method="post" enctype="multipart/form-data">
		    		<input type="text" name="type"  placeholder="type" required="required" style="width: 100%;height: 30px"><br><br>
					<input type="text" name="name"  placeholder="Name" required="required" style="width: 100%;height: 30px"><br><br>
					<input type="text" name="description"  placeholder="description" required="required" style="width: 100%;height: 30px"><br><br> 
					<input type="file" name="fileToUpload" id="fileToUpload" style="width: 100%;height: 30px"><br><br>
					<input type="number" name="price"  placeholder="price" required="required" style="width: 100%;height: 30px"> <br><br>
					<input type="submit" value="Submit" name="submit" class="btn btn-lg btn-primary" >
				</form>
	    	</div>   	
	  	</div>
	</div>
</body>
</html>