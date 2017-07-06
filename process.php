<?php
require_once ("confi.php");
$type = $_POST['type'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$photos = $_FILES["fileToUpload"]["tmp_name"];
$photo = $_FILES["fileToUpload"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image\
	if(isset($_POST["submit"])) {
	    if(move_uploaded_file($photos , $target_file)){

	    }  
	}
    $sql = "insert into eco (TYPE, NAME, DESCRIPTION, IMAGE , PRINCE) values ('$type', '$name', '$description', '$photo' , '$price')";
    $result = $conn->query($sql);
	if($result){
		echo "Success with put your Product";
	}
?>