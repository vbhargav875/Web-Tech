<?php
	include_once 'includes/dbhinc.php';
	$name = $_POST["name"];
	$email = $_POST['email'];
	$query = $_POST['query'];
	$sql = "
		INSERT INTO queries(name,email,query) VALUES('$name','$email','$query');
	";
	mysqli_query($conn,$sql) or die("Not able to insert");
	
?>
