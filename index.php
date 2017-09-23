<?php
	session_start();

	if(!isset($_SESSION['user'])) {
	    header('Location: login.php');
	}

	$db_host = "localhost";
    $db_username = "id3015558_username";
    $db_pass = "laundrysucks";
    $db_name = "id3015558_laundry";

    $conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
    if($conn->connect_error) {
      die("Connection failed" . $conn->connect_error);
    } 

?>

<!DOCTYPE html>

<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="duncan.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>

		$(document).ready(function() {
			$(".washerbutton").click(function() {
				machineName = $(this).attr('name');
				$("#machineName").html(machineName);
				$('#machine').attr('value',machineName);
			});

		});

	</script>
  
</head>


<body>

	<div class="container">

			<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Status</h4>
					</div>
					<div class="modal-body">
						<p>
							<form action="claimMachine.php" method = "post">
								<br>Machine Name<br>
		  						<input time = "text" name = "machine" id = "machine" readonly>
		  						<br>Timer<br>
		  						<input type="time" name="timer" value="30">
		  						<br><br>
		  						<button type="submit" class="btn btn-success">Start Timer</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<br><br>
									<button type="button" class="btn btn-danger"
									data-toggle="modal"
									data-target="#modalReport"
									data-dismiss="modal">Report as Broken</button>
							</form>
						</p>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
		<!--Appears after user clicks Report as Broken.-->
		<div class="modal fade" id="modalReport" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Report Broken Machine</h4>
					</div>
					<div class="modal-body">
						<p><form action="/action_page.php">
							What's wrong with the machine?
							<div class="radio">
  							<label><input type="radio" name="notStart">The machine is not
									starting</label>
							</div>
							<div class="radio">
  							<label><input type="radio" name="notWash">The machine starts
									but doesn't wash/dry properly</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio">Other</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						<button type="button" class="btn btn-default"
						data-toggle="modal"
						data-target="#modalThanks"
						data-dismiss="modal"
						onclick="usrreport()">Submit</button>
						</form></p>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
		<!--Appears after successful user report.-->
		<div class="modal fade" id="modalThanks" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Thank you.</h4>
					</div>
					<div class="modal-body">
						<p><form action="/action_page.php">
						Report submitted successfully.
						</form></p>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>



		<div class="tab-content clearfix">
			<div class="tab-pane active" id="1a">
          		<div class="row room-label">
					<div class="col-sm-12">
						<h1> Duncan Laundry Room </h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<!--<button class ="in-use" class="button" onclick="div_show()">Washer 1</button>-->
						<button type="button" class="washerbutton" name = "washer1" data-toggle="modal" data-target="#myModal">Washer 1</button>
						<button type="button" class="washerbutton" name = "washer2" data-toggle="modal" data-target="#myModal">Washer 2</button>
						<button type="button" class="washerbutton" name = "washer3" data-toggle="modal" data-target="#myModal">Washer 3</button>
						<button type="button" class="washerbutton" name = "washer4" data-toggle="modal" data-target="#myModal">Washer 4</button>
						<button type="button" class="washerbutton" name = "washer5" data-toggle="modal" data-target="#myModal">Washer 5</button>
						<button type="button" class="washerbutton" name = "washer6" data-toggle="modal" data-target="#myModal">Washer 6</button>
						<button type="button" class="washerbutton" name = "washer7" data-toggle="modal" data-target="#myModal">Washer 7</button>
						<button type="button" class="washerbutton" name = "washer8" data-toggle="modal" data-target="#myModal">Washer 8</button>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="button" class="washerbutton" name = "dryer1" data-toggle="modal" data-target="#myModal">Dryer 1</button>
						<button type="button" class="washerbutton" name = "dryer2" data-toggle="modal" data-target="#myModal">Dryer 2</button>
						<button type="button" class="washerbutton" name = "dryer3" data-toggle="modal" data-target="#myModal">Dryer 3</button>
						<button type="button" class="washerbutton" name = "dryer4" data-toggle="modal" data-target="#myModal">Dryer 4</button>
						<button type="button" class="washerbutton" name = "dryer5" data-toggle="modal" data-target="#myModal">Dryer 5</button>
						<button type="button" class="washerbutton" name = "dryer6" data-toggle="modal" data-target="#myModal">Dryer 6</button>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="button" class="washerbutton" name = "dryer7" data-toggle="modal" data-target="#myModal">Dryer 7</button>
						<button type="button" class="washerbutton" name = "dryer8" data-toggle="modal" data-target="#myModal">Dryer 8</button>
						<button type="button" class="washerbutton" name = "dryer9" data-toggle="modal" data-target="#myModal">Dryer 9</button>
						<button type="button" class="washerbutton" name = "dryer10"  data-toggle="modal" data-target="#myModal">Dryer 10</button>
						<button type="button" class="washerbutton" name = "dryer11"  data-toggle="modal" data-target="#myModal">Dryer 11</button>
						<button type="button" class="washerbutton" name = "dryer12" data-toggle="modal" data-target="#myModal">Dryer 12</button>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2a">
          		<h3>The timer will go here</h3>
			</div>
        		<div class="tab-pane" id="3a">
 	          		<h1>Settings</h1>
 					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button"
							data-toggle="dropdown">Change college
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
						<li><a href="#">Baker</a></li>
						<li><a href="#">Brown</a></li>
						<li><a href="#">Duncan</a></li>
						<li><a href="#">Hanszen</a></li>
						<li><a href="#">Jones</a></li>
						<li><a href="#">Lovett</a></li>
						<li><a href="#">Martel</a></li>
						<li><a href="#">McMurtry</a></li>
						<li><a href="#">Will Rice</a></li>
						<li><a href="#">Sid Rich</a></li>
						<li><a href="#">Wiess</a></li>
						</ul>
					</div><br>
						<!--Send feedback.-->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal"
					data-target="#feedbackModal">Feedback</button>
					<!--Delete account.-->
 				</div>
		</div>
			<ul class="nav nav-pills pill-height">
				<li class="active"><a data-toggle="tab" href="#1a"><i class="material-icons">local_laundry_service</i></a></li>
			  	<li><a href="#2a" data-toggle="tab"><i class="material-icons">timer</i></a></li>
			  	<li><a href="#3a" data-toggle="tab"><i class="material-icons">settings</i></a></li>
			</ul>
  		</div>
</body>
</html>
