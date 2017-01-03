<?php

	include_once 'db.php';

	// get uvaid
    $uvaid = $_GET['uvaid'];

    // default values
    $event1 = "no";
    $event2 = "no";
    $event3 = "no";
    $event4 = "no";
    $event5 = "no";
    $event6 = "no";

	// queries

	// event 1
	$select_q = "SELECT * FROM firstRoundEvent1 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event1 = "yes";}
	// event 2
	$select_q = "SELECT * FROM firstRoundEvent2 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event2 = "yes";}
	// event 3
	$select_q = "SELECT * FROM firstRoundEvent3 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event3 = "yes";}
	// event 4
	$select_q = "SELECT * FROM secondRoundEvent1 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event4 = "yes";}
	// event 5
	$select_q = "SELECT * FROM secondRoundEvent2 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event5 = "yes";}
	// event 6
	$select_q = "SELECT * FROM secondRoundEvent3 WHERE email = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event6 = "yes";}
	
?>
