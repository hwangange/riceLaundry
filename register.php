<?php
    session_start();
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Rice Laundry App</title>
	<script src="script.js"></script>
	</script>
	<script>
		$(document).ready(function() {
			$("#collegeSelect li").click(function() {

				collegeName = $(this).find("a").text()
				$(".selected").removeClass("selected");
			   // $("#college").val($(this).find("a").text());
			    $("#menu1").attr("text", collegeName);

			    $(this).addClass("selected");
			    $("#college").attr("value",collegeName);
			    
			});
		});
	</script>
	<style>
		input {
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
	<header class ="header">
		<img src="laundry-icon.svg" alt="laundry icon" height="50px">
		<h1>RICE LAUNDRY</h1>
	</header>
	
		<form method = "post" action="registerConfirm.php">
				<h4>sign up for rice laundry</h4>
				<input type="text" placeholder="new username" name="username" required>
				<br>
				<input type="password" placeholder="new password" name="password" required>
				<!--<input type="password" placeholder="confirm password" name="passwordConfirm" required> -->
				<div class="dropdown">
    			<button class="btn btn-default dropdown-toggle" class="selectBox" type="button"
					id="menu1" data-toggle="dropdown">your college
    			<span class="caret"></span></button>
    			<ul class="dropdown-menu" role="menu" name = "collegeSelect" id = "collegeSelect" aria-labelledby="menu1">
	      			<li role="presentation" value = "Baker"><a role="menuitem" tabindex="-1" href="#">Baker</a></li>
	      			<li role="presentation" value = "Brown"><a role="menuitem" tabindex="-1" href="#">Brown</a></li>
	      			<li role="presentation" value = "Duncan"><a role="menuitem" tabindex="-1" href="#">Duncan</a></li>
	      			<li role="presentation" value = "Hanszen"><a role="menuitem" tabindex="-1" href="#">Hanszen</a></li>
					<li role="presentation" value = "Jones"><a role="menuitem" tabindex="-1" href="#">Jones</a></li>
					<li role="presentation" value = "Lovett"><a role="menuitem" tabindex="-1" href="#">Lovett </a></li>
					<li role="presentation" value = "Martel"><a role="menuitem" tabindex="-1" href="#">Martel</a></li>
					<li role="presentation" value = "McMurtry"><a role="menuitem" tabindex="-1" href="#">McMurtry</a></li>
					<li role="presentation" value = "Will Rice"><a role="menuitem" tabindex="-1" href="#">Will Rice</a></li>
					<li role="presentation" value = "Sid Rich"><a role="menuitem" tabindex="-1" href="#">Sid Rich</a></li>
					<li role="presentation" value = "Weiss"><a role="menuitem" tabindex="-1" href="#">Wiess</a></li>
    			</ul>
    			<input type="type" id="college" name="college" readonly>
  			</div>
			<div class="clearfix">
				<button type="submit">CREATE ACCOUNT</button>
			</div><br>
			</form>
			<a href="login.php"><p>
				have an account? sign in</p></a>
	</body>
	</html>