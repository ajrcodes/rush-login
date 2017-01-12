<?php
	
	include_once 'db.php';

	// get information 
	$uvaid = $_POST['uvaid'];
	
	// insert into MySQL db
	$insert_q = "DELETE FROM rushee WHERE uvaid = '$uvaid'";
	mysqli_query($conn, $insert_q);
?>