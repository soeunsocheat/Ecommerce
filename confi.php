<?php 
	$conn = new mysqli("localhost" , "root" , "" , "db_eco");
	if($conn->connect_error){
		die("fail connect");
	}
 ?>