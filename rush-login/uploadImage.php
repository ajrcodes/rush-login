<?php
	
	$email = $_GET['email'];
	move_uploaded_file($_FILES['webcam']['tmp_name'], "images/$email.jpg");

?>