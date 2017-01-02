<?php
	
	include_once 'db.php';

	// get form entries 
	$email =   $_POST['email'];
	$eventId = $_POST['eventId'];
	
	// insert into MySQL db
	$insert_q = "INSERT INTO $eventId VALUES('$email')";
	mysqli_query($conn, $insert_q);

?>