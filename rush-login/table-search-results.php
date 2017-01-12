<?php
    // connection
    include 'db.php';

    // get user inputs
    $year = $_GET['year'];
    $event = $_GET['event'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];

    // form query
    $sql_array = [];

    $year_sql = '';
    if(!empty($year)) {
        $year_sql = "year = '$year'";
        array_push($sql_array, $year_sql);
    }

    $fName_sql = '';
    if(!empty($firstName)) {
        $fName_sql = "firstName = '$firstName'";
        array_push($sql_array, $fName_sql);
    }

    $lName_sql = '';
    if(!empty($lastName)) {
        $lName_sql = "lastName = '$lastName'";
        array_push($sql_array, $lName_sql);
    }
    // only include WHERE clause if theres something to be searched for
    if(!empty($sql_array)) {
        $where_q = 'WHERE ' . implode(" AND ", $sql_array) . ';';
    } else {
         $where_q = ';';
    }

    if(!empty($event)) {
        $sql = "SELECT * FROM rushee INNER JOIN $event on rushee.uvaid = $event.uvaid $where_q";
    } else {
        $sql = "SELECT * FROM rushee $where_q";
    }

    $result = mysqli_query($conn, $sql);
    $i = 0;

    // fetch data
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

    // encode in JSON for the table to use
    $json_string = json_encode($data['posts']);
    $file = 'table-fill.json';
    file_put_contents($file, $json_string);
    @header('Location:table.php?round=search');
?>
