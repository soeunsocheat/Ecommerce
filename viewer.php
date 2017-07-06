<?php 
	require_once ("confi.php");
	$email = $_POST['mail'];
	$password = $_POST['password'];
	$sql = "select * from email";
	$result = $conn->query($sql);
	while ($row = $result->fetch_object()){
		if($row->email == $email && $row->password == $password)
			require_once ("viewCoustomer.php");
		else{
			echo "Incorrect!Check Email and Password again";
		}
	}
?>