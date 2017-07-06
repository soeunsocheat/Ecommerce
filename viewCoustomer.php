<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		require_once ("confi.php");
		$sql = "select * from payment";
		$result = $conn->query($sql);
	?>
	<div class="container">
	<h2 align="center">Table Cutomer Order</h2><br>
	<table class="table">
	<thead>
      	<tr>
	      	<th>ID</th>
	        <th>Country</th>
	        <th>E-mail</th>
	        <th>Phone Number</th>
	        <th>Postal Number</th>
	        <th>Type Computer</th>
	        <th>Price</th> 
      	</tr>
    </thead>
	<?php
		$i = 1;
		while ($row = $result->fetch_object()){
			?>             
			    <tbody>
			      <tr>
			        <td><?=$i?></td>
			        <td><?=$row->Country?></td>
			        <td><?=$row->Mail?></td>
			        <td><?=$row->Phone?></td>
			        <td><?=$row->Postal?></td>
			        <td><?=$row->Name?></td>
			        <td><?=$row->Price?></td>
			      </tr>
			    </tbody> 
			<?php
			$i++;
		}
	 ?>
		</table>
		<div class="col-sm-4">
		    <form class="navbar-form" action="register.php" method="post" enctype="multipart/form-data">
	    		<button class="btn" type="submit">Add New Product</button>
	    	</form>
		</div>
	</div>
</body>
</html>