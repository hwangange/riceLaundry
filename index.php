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
	<title>Rice Laundry</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="duncan.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="duncan.js"></script>
	<script src = "/api/noushin2.js"></script>
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

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Machine Status</h4>
				</div>

				<div class="modal-body">
					<form action="claimMachine.php" method = "post">
						Machine Name<br>
		  				<input time = "text" name = "machine" id = "machine" readonly>
		  				<br>Timer<br>
		  				<select class="form-control">
		  					<option>Select an option</option>
				  			<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
						</select>
		  				<br><br>
		  				<button type="submit" class="btn btn-success" onclick="exec()">Start Timer</button>

						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<br><br>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalReport" data-dismiss="modal">Report as Broken</button>
					</form>
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


				<!--Appears after "feedback" is chosen in the Settings menu.-->
		<div class="modal fade" id="modalFeedback" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Status</h4>
					</div>
					<div class="modal-body">
						<p><form action="feedback.php" method = "post">
							<label for="comment">How can we improve?</label>
							<textarea class="form-control" rows="5" id="comment" name = "feedback"></textarea>
							<button type="submit" class="btn btn-success">Send</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</form></p>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>


<div class="container-fluid">
	<div class="scroll-area">
		<div class="tab-content">
			<div class="tab-pane active" id="1a">
          		<div class="row">
					<div class="col-sm-12">
						<h1> Duncan Laundry Room </h1>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button type="button" class="washerbutton" onclick="test(this)" name = "washer1" id = "washer1" data-toggle="modal" data-target="#myModal">Washer 1</button>
<script>function test(button){
 set_machine(button.id)
}</script>
						<button type="button" class="washerbutton" name = "washer2" id = "washer2" data-toggle="modal" data-target="#myModal">Washer 2</button>
						<button type="button" class="washerbutton" name = "washer3" id = "washer3" data-toggle="modal" data-target="#myModal">Washer 3</button>
						<button type="button" class="washerbutton" name = "washer4" id = "washer4" data-toggle="modal" data-target="#myModal">Washer 4</button>
						<button type="button" class="washerbutton" name = "washer5" id = "washer5" data-toggle="modal" data-target="#myModal">Washer 5</button>
						<button type="button" class="washerbutton" name = "washer6" id = "washer6" data-toggle="modal" data-target="#myModal">Washer 6</button>
						<button type="button" class="washerbutton" name = "washer7" id = "washer7" data-toggle="modal" data-target="#myModal">Washer 7</button>
						<button type="button" class="washerbutton" name = "washer8" id = "washer8" data-toggle="modal" data-target="#myModal">Washer 8</button>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="button" class="washerbutton" name = "dryer1" id = "dryer1" data-toggle="modal" data-target="#myModal">Dryer 1</button>
						<button type="button" class="washerbutton" name = "dryer2" id = "dryer2" data-toggle="modal" data-target="#myModal">Dryer 2</button>
						<button type="button" class="washerbutton" name = "dryer3" id = "dryer3" data-toggle="modal" data-target="#myModal">Dryer 3</button>
						<button type="button" class="washerbutton" name = "dryer4" id = "dryer4" data-toggle="modal" data-target="#myModal">Dryer 4</button>
						<button type="button" class="washerbutton" name = "dryer5" id = "dryer5" data-toggle="modal" data-target="#myModal">Dryer 5</button>
						<button type="button" class="washerbutton" name = "dryer6" id = "dryer6" data-toggle="modal" data-target="#myModal">Dryer 6</button>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button type="button" class="washerbutton" name = "dryer7" id = "dryer7" data-toggle="modal" data-target="#myModal">Dryer 7</button>
						<button type="button" class="washerbutton" name = "dryer8" id = "dryer8" data-toggle="modal" data-target="#myModal">Dryer 8</button>
						<button type="button" class="washerbutton" name = "dryer9" id = "dryer9" data-toggle="modal" data-target="#myModal">Dryer 9</button>
						<button type="button" class="washerbutton" name = "dryer10" id = "dryer10" data-toggle="modal" data-target="#myModal">Dryer 10</button>
						<button type="button" class="washerbutton" name = "dryer11" id = "dryer11" data-toggle="modal" data-target="#myModal">Dryer 11</button>
						<button type="button" class="washerbutton" name = "dryer12" id = "dryer12" data-toggle="modal" data-target="#myModal">Dryer 12</button>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2a">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Your machines</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1>Dryer 1</h1>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h1>Time remaining:</h1>
						<p id="demo"></p>
					</div>
				</div>
			</div>
      <div class="tab-pane" id="3a">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="title">settings</h1>
						<br>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<h1>account username:</h1>
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h1><?php echo $_SESSION['user']; ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<h1>residential college:</h1>
						</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<h1 id="current"><?php echo $_SESSION['college']; ?></h1>
							</div>
					</div>
				<!--	<form action="/action_page.php">
							<select onchange="showSelectedItem()" id="college" name="options" class="form-control" style="text-align-last:center;margin:100px;width:200px">
								<option selected disabled hidden>change college </option>
								<option value="Baker">Baker</option>
								<option value="Brown">Brown</option>
								<option value="Duncan">Duncan</option>
								<option value="Hanszen">Hanszen</option>
								<option value="Jones">Jones</option>
								<option value="Lovett">Lovett</option>
								<option value="Martel">Martel</option>
								<option value="McMurtry">McMurtry</option>
								<option value="Will Rice">Will Rice</option>
								<option value="Sid Rich">Sid Rich</option>
								<option value="Wiess">Wiess</option>
							</select> -->
						<!--This is the old dropdown code, for reference.
							<button class="dropbtn" type="button"
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
						</ul>-->
						<!--Send feedback.-->
							<button type="button" class="feedbackbutton" data-toggle="modal"
							data-target="#modalFeedback">feedback</button>
					<!--Delete account.-->
					<a href = "logout.php"><button type = "button" class = "feedbackbutton">Log Out</button></a>
<button type = "button" id = "timee">Time</button>
 				</div>
		</div>
			<ul class="nav nav-pills pill-height">
				<li class="active" id = "service_page"><a data-toggle="tab" href="#1a"><i class="material-icons">local_laundry_service</i></a></li>
			  	<li id = "timer_page"><a href="#2a" data-toggle="tab"><i class="material-icons">timer</i></a></li>
			  	<li id = "settings_page"><a href="#3a" data-toggle="tab"><i class="material-icons">settings</i></a></li>
			</ul>
  		</div>
<script>
  		$("#timee").click(function() {
  			php_time = getPhpTime();
  			javascript_time = Date.now()/1000;
  			difference = php_time - javascript_time;
  			alert("PHP: " + php_time + " - JavaScript: " + javascript_time + " = " + difference);
  		});

  		function getPhpTime() {
  			return <?php echo time(); ?>;
  		}
  		</script>
</body>
</html>