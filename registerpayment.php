<?php
	require_once ("confi.php");
	$id = $_POST['submit'];
	$Country = $_POST['Country'];
	$Email = $_POST['E-mail'];
	$Phone = $_POST['Phone'];
	$Postal = $_POST['Postal'];
	$sql = "select * from eco where ID = '$id'";
	$result = $conn->query($sql);
	while ($row = $result->fetch_object()){
		$name = $row->NAME;
		$prices = $row->Prince;
		// echo $Country;
	}
	// $sql = "select * from payment where id = 1";
	$sql = "insert into payment(Country , Mail , Phone , Postal , Name , Price) values ('$Country' , '$Email' , '$Phone', '$Postal', '$name', '$prices')";
	// $sql = "insert into payment (Country, E-mail, Phone, Postal , Name, Price) values ('$Country', '$Email', '$Phone', '$Postal' , '$name', '$prices')";
	// echo $sql;
    $result = $conn->query($sql);
    // while ($row = $result->fetch_object()){
    // 	echo $row->id;
    // }

	if($result){
		
	require_once ("payment.php");
	}
?>