<?php
	
	include_once 'db.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$year = $_POST['year'];
	$address = $_POST['address'];
	$phoneNum = $_POST['phoneNum'];
	$email = $_POST['email'];

	$insert_q = "INSERT INTO rushee VALUES('', '$firstName', '$lastName', '$year', '$address', '$phoneNum', '$email')";
	mysqli_query($conn, $insert_q);

?>