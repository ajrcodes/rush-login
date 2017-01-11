<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rushee information page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/basic-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container padding-top-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          Rushee information page
        </div>
        <div class="panel-body">
            <div class="row padding-top-10">
                <div class="col-md-6">
                    First Name:
                    <label id="firstName">No first name provided</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Last Name:
                    <label id="lastName">No last name provided</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">Image:</div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    <img id="rusheePic" src="images/default.jpg">
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Year:
                    <label id="year">No year provided</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Address:
                    <label id="address">No address provided</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Phone number:
                    <label id="phoneNum">No phone number provided</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    UVA id:
                    <label id="uvaid">No UVA id provided</label>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-4">
                    <label>First Round</label>
                </div>
                <div class="col-md-4">
                    <label>Second Round</label>
                </div>
                <div class="col-md-4">
                    <label>Third Round</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-4">
                    Event 1:
                    <label id="event1">No</label>
                </div>
                <div class="col-md-4">
                    Event 1:
                    <label id="event4">No</label>
                </div>
                <div class="col-md-4">
                    Event 1:
                    <label id="event7">No</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-4">
                    Event 2:
                    <label id="event2">No</label>
                </div>
                <div class="col-md-4">
                    Event 2:
                    <label id="event5">No</label>
                </div>
                <div class="col-md-4">
                    Event 2:
                    <label id="event8">No</label>
                </div>
            </div>
            <div class="row padding-top-10">
                <div class="col-md-4">
                    Event 3:
                    <label id="event3">No</label>
                </div>
                <div class="col-md-4">
                    Event 3:
                    <label id="event6">No</label>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    First Round:
                    <label id="firstRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button id="addRushee" class="btn btn-success btn-xs">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button id="removeRushee" class="btn btn-danger btn-xs" onclick="remove('rusheeFirstRound')">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Second Round:
                    <label id="secondRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button id="addRushee" type="button" class="btn btn-success btn-xs" onclick="add('rusheeSecondRound')">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button id="removeRushee" type="button" class="btn btn-danger btn-xs" onclick="remove('rusheeSecondRound')">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Third Round:
                    <label id="thirdRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button id="addRushee" type="button" class="btn btn-success btn-xs" onclick="add('rusheeThirdRound')">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button id="removeRushee" type="button" class="btn btn-danger btn-xs" onclick="remove('rusheeThirdRound')">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <label id="tester">hihi</label>
        </div>
      </div>
    </div>
    
    <!-- Page setup -->
    <?php include 'getEvents.php'; ?>
    <script>
        // information
        document.getElementById('firstName').innerHTML = '<?php echo $_GET['firstName']; ?>' ;
        document.getElementById('lastName').innerHTML = '<?php echo $_GET['lastName']; ?>';
        document.getElementById('year').innerHTML = '<?php echo $_GET['year']; ?>';
        document.getElementById('address').innerHTML = '<?php echo $_GET['address']; ?>';
        document.getElementById('phoneNum').innerHTML = '<?php echo $_GET['phoneNum']; ?>';
        document.getElementById('uvaid').innerHTML = '<?php echo $_GET['uvaid']; ?>';
        // image
        document.getElementById('rusheePic').src = "images/" + '<?php echo $_GET['uvaid']; ?>' + ".jpg";
        // events
        document.getElementById('event1').innerHTML = '<?php echo $event1; ?>';
        document.getElementById('event2').innerHTML = '<?php echo $event2; ?>';
        document.getElementById('event3').innerHTML = '<?php echo $event3; ?>';
        document.getElementById('event4').innerHTML = '<?php echo $event4; ?>';
        document.getElementById('event5').innerHTML = '<?php echo $event5; ?>';
        document.getElementById('event6').innerHTML = '<?php echo $event6; ?>';
        document.getElementById('event7').innerHTML = '<?php echo $event7; ?>';
        document.getElementById('event8').innerHTML = '<?php echo $event8; ?>';
        // rounds
        document.getElementById('firstRound').innerHTML = '<?php echo $round1; ?>';
        document.getElementById('secondRound').innerHTML = '<?php echo $round2; ?>';
        document.getElementById('thirdRound').innerHTML = '<?php echo $round3; ?>';
    </script>

    <!-- add / remove button scripts -->
    <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
    
            $("#addRushee").click(function(event){

               $.post("addRushee.php", {uvaid: "test please"}, function(){}); 

            });

         });
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>