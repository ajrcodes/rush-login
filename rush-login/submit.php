<?php
	
	include_once 'db.php';

	// get form entries 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$year = $_POST['year'];
	$address = $_POST['address'];
	$phoneNum = $_POST['phoneNum'];
	$email = $_POST['email'];
	
	// insert into rushee table
	$insert_q = "INSERT INTO rushee VALUES('$firstName', '$lastName', '$year', '$address', '$phoneNum', '$email')";
	mysqli_query($conn, $insert_q);
	// also insert into first round
	$insert_q = "INSERT INTO rusheeFirstRound VALUES('$email')";
	mysqli_query($conn, $insert_q);

?>