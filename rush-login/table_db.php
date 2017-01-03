<?php
    include 'db.php';
    $sql = "SELECT * FROM rushee";
    $result = mysqli_query($conn, $sql);
    $i = 0;

    while($row = mysqli_fetch_array($result)) {
    	// attributes 
    	$response[$i]['firstName'] = $row['firstName'];
    	$response[$i]['lastName']  = $row['lastName'];
    	$response[$i]['year']      = $row['year'];
    	$response[$i]['address']   = $row['address'];
    	$response[$i]['phoneNum']  = $row['phoneNum'];
    	$response[$i]['uvaid']     = $row['uvaid'];
    	// json
    	$data['posts'][$i] = $response[$i];
    	$i = $i + 1; 
    }

    $json_string = json_encode($data['posts']);
    $file = 'table_fill.json';
    file_put_contents($file, $json_string);
    @header('Location:table.html');
?>
