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
                <div class="col-md-6">
                <div class="text-right">
                  <button class="btn close">Delete <span class="glyphicon glyphicon-remove" style="vertical-align:middle"></span></button>
                  <div id="dialog-box" title="Confirmation:">This will permanently delete the rushee's record, are you sure?</div>
                </div>
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
            <label>Round invites</label>
            <div class="padding-top-10"></div>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    First Round:
                    <label id="rusheeFirstRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button class="btn btn-success btn-xs" onClick="add('rusheeFirstRound');this.blur()">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button class="btn btn-danger btn-xs" onClick="remove('rusheeFirstRound');this.blur()">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Second Round:
                    <label id="rusheeSecondRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button class="btn btn-success btn-xs" onClick="add('rusheeSecondRound');this.blur()">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button class="btn btn-danger btn-xs" onClick="remove('rusheeSecondRound');this.blur()">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <hr>
            <div class="row padding-top-10">
                <div class="col-md-6">
                    Third Round:
                    <label id="rusheeThirdRound"><span class="glyphicon glyphicon-remove"></span></label>
                </div>
                <div class "col-md-6">
                    <button class="btn btn-success btn-xs" onClick="add('rusheeThirdRound');this.blur()">Add <span class="glyphicon glyphicon-plus"></span></button>
                    <button class="btn btn-danger btn-xs" onClick="remove('rusheeThirdRound');this.blur()">Remove <span class="glyphicon glyphicon-minus"></span></button>
                </div>
            </div>
            <hr>
            <label>Event attendance</label>
            <div class="padding-top-10"></div>
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
        document.getElementById('rusheeFirstRound').innerHTML = '<?php echo $round1; ?>';
        document.getElementById('rusheeSecondRound').innerHTML = '<?php echo $round2; ?>';
        document.getElementById('rusheeThirdRound').innerHTML = '<?php echo $round3; ?>';
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- delete button script, using jQuery Dialog UI-->
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <script>
        $(document).ready(function() {
            $("#dialog-box").dialog({
                autoOpen: false,
                modal: true
            });

            $(".close").click(function(e) {
                $("#dialog-box").dialog({
                    buttons : {
                        "Confirm" : function() {
                            var user_id = document.getElementById("uvaid").innerHTML;
                            jQuery.ajax({
                                type: "POST",
                                url: "deleteRushee.php",
                                data: { uvaid: user_id}
                                }).done(function(msg) {

                            });
                            // go back 2 pages so the json is reloaded & the table reflects the delete
                            history.go(-2);
                        },
                        "Cancel" : function() {
                            $(this).dialog("close");
                        }
                    }
                });

                $("#dialog-box").dialog("open");
            }); 
        });
    </script>

    <!-- add / remove button scripts -->
    <script type="text/javascript">
        function add(roundName) {
            var user_id = document.getElementById('uvaid').innerHTML;
            jQuery.ajax({
                type: "POST",
                url: "addRushee.php",
                data: { uvaid: user_id, round: roundName}
                }).done(function(msg) {

            });

            // reflect changes
            document.getElementById(roundName).innerHTML = '<?php echo $default_yes; ?>';
        }

        function remove(roundName) {
            var user_id = document.getElementById('uvaid').innerHTML;
            jQuery.ajax({
                type: "POST",
                url: "removeRushee.php",
                data: { uvaid: user_id, round: roundName}
                }).done(function(msg) {

            });

            // reflect changes
            document.getElementById(roundName).innerHTML = '<?php echo $default_no; ?>';
        }
    </script>
  </body>
</html>