<?php
	
	include_once 'db.php';

	// get information 
	$uvaid = $_POST['uvaid'];
	
	// insert into MySQL db
	$insert_q = "INSERT INTO rusheeFirstRound VALUES('test123')";
	mysqli_query($conn, $insert_q);

?>