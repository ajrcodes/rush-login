<?php
	
	include_once 'db.php';

	// get information 
	$uvaid = $_POST['uvaid'];
	$roundName = $_POST['round'];
	
	// insert into MySQL db
	$insert_q = "DELETE FROM $roundName WHERE uvaid = '$uvaid'";
	mysqli_query($conn, $insert_q);

?>