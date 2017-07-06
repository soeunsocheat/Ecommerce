<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
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
<?php
		require_once ("confi.php");
		$id = $_POST['submit'];
		$sql = "select * from eco where ID = '$id'";
    	$result = $conn->query($sql);
    	while ($row = $result->fetch_object()){
    		?>
	<form style="margin-left: 300px" class="navbar-form" action="registerpayment.php" method="post" enctype="multipart/form-data">
	<h2>Payment</h2><hr>
		<div class="col-sm-2">
			<p style="margin-top: 2px; margin-bottom: 5px">Country</p><br>
			<p style="margin-bottom: 2px">E-mail</p><br>
			<p style="margin-top: 5px; margin-bottom: 5px">Phone Number</p> <br>
			<p>Postal Code</p> <br>
			<h4>Credit Card</h4><br>
			<p>Card Number</p>
			<p style="margin-top: 25px">Password</p><br><br>
			<button id="hello" name = "submit" type="submit" class="btn btn-primary" value='<?=$row->ID ?>'>Buy</button>
		</div>
		<div class="col-sm-4">
			<input type="text" name="Country" placeholder="Country" style="width: 80%"><br><br>
			<input type="E-mail" name="E-mail" placeholder="E-mail" style="width: 80%"><br><br>
			<input type="Number" name="Phone" placeholder="Phone Number" style="width: 80%"><br><br>
			<input type="Number" name="Postal" placeholder="Postal Code" style="width: 80%"><br><br><br><br><br>
			<input type="Number" name="cardNumer" placeholder="Card Number" style="width: 80%"><br><br>
			<input type="passworld" name="pass" placeholder="password" style="width: 80%"><br><br>

		</div>
	</form>
		<div class="col-sm-2" align="center">
			<h2><?=$row->NAME ?></h2>
			<img height="200" width="200" src="img\<?=$row->IMAGE ?>">
			<h3>Price : <?=$row->Prince ?>$</h3>
		</div>
    		<?php
    	}
	 ?>
</body>
</html>