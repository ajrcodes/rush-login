<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rushee information</title>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.css">
    <link rel="stylesheet" href="css/basic-template.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .table {
            font-size: 12px;
        }
    </style>

    <?php
        $round = $_GET['round'];
        $title = '';
        // set up the title of the table accordingly
        if($round == 'search') {
            $title = 'Search results';
        }
        if($round == 'openHouse') {
            $title = 'Rushee Information - Open House';
        }
        if($round == 'rusheeFirstRound') {
            $title = 'Rushee Information - First Round';
        }
        if($round == 'rusheeSecondRound') {
            $title = 'Rushee Information - Second Round';
        }
        if($round == 'rusheeThirdRound') {
            $title = 'Rushee Information - Third Round';
        }
    ?>
  </head>
  <body>
    <div class="container padding-top-10">
        <div class="row padding-top-10">
        <label id="title"><font size="5"><?php echo $title; ?></font></label>
        </div>
    	<div class="row padding-top-10">
    		<table id="table"></table>
            <div id="test"></div>
    	</div>
    </div>
    <!-- Table function -->
    <script type="text/JavaScript">
        $('#table').bootstrapTable({
            method: 'get',
            url: 'table-fill.json',
            height: 600,
            cache: false,
            striped: true,
            pagination: true,
            pageSize: 25,
            pageList: [10,25,50,100,200],
            minimumCountColumns: 2,
            clickToSelect: true,
            columns: [{
                field: 'firstName',
                title: 'First name'
            }, {
                field: 'lastName',
                title: 'Last name'
            }, {
                field: 'year',
                title: 'Year'
            }, {
                field: 'address',
                title: 'Address'
            }, {
                field: 'phoneNum',
                title: 'Phone number'
            }, {
                field: 'uvaid',
                title: 'UVA id'
            }, ]
        });

        $('#table').on('click-row.bs.table', function (row, $element, field) {
            // on click, route to individual display page with row's information
            window.location.href = "rushee-information.php?firstName="+$element['firstName']
            +"&lastName="+$element['lastName']
            +"&year="+$element['year']
            +"&address="+$element['address']
            +"&phoneNum="+$element['phoneNum']
            +"&uvaid="+$element['uvaid'];
        });
    </script>﻿
  </body>
</html>