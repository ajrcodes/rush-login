<?php

	include_once 'db.php';

	// get uvaid
    $uvaid = $_GET['uvaid'];

    // default values
    $default_no = '<span class="glyphicon glyphicon-remove" style="color:#FF0000;"></span>';
    $default_yes = '<span class="glyphicon glyphicon-ok" style="color:#00FF00;"></span>';

    // rounds
    $round1 = $default_no;
    $round2 = $default_no;
    $round3 = $default_no;
    // events
    $event1 = $default_no;
    $event2 = $default_no;
    $event3 = $default_no;
    $event4 = $default_no;
    $event5 = $default_no;
    $event6 = $default_no;
    $event7 = $default_no;
    $event8 = $default_no;

	// queries - events

	// event 1
	$select_q = "SELECT * FROM firstRoundEvent1 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event1 = $default_yes;}
	// event 2
	$select_q = "SELECT * FROM firstRoundEvent2 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event2 = $default_yes;}
	// event 3
	$select_q = "SELECT * FROM firstRoundEvent3 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event3 = $default_yes;}
	// event 4
	$select_q = "SELECT * FROM secondRoundEvent1 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event4 = $default_yes;}
	// event 5
	$select_q = "SELECT * FROM secondRoundEvent2 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event5 = $default_yes;}
	// event 6
	$select_q = "SELECT * FROM secondRoundEvent3 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event6 = $default_yes;}
	// event 7
	$select_q = "SELECT * FROM thirdRoundEvent1 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event7 = $default_yes;}
	// event 8
	$select_q = "SELECT * FROM thirdRoundEvent2 WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $event8 = $default_yes;}

	// queries - rounds

	// first round
	$select_q = "SELECT * FROM rusheeFirstRound WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $round1 = $default_yes;}
	// second round
	$select_q = "SELECT * FROM rusheeSecondRound WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $round2 = $default_yes;}
	// third round
	$select_q = "SELECT * FROM rusheeThirdRound WHERE uvaid = '$uvaid'";
	$result = mysqli_query($conn, $select_q);
	if(mysqli_num_rows($result)!=0) { $round3 = $default_yes;}

	
?>
