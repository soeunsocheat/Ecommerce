<?php 
	require_once ("confi.php");
	$sql = "insert into payment (Country , Mail , Phone , Postal , Name , Price) values ('1' , '1' , '1', '1', '1', '1')";
	// $sql = "insert into payment (Country) values ('hello')";
	$result = $conn->query($sql);
	if($result){
		echo "Success with put your Product";
	}
 ?>