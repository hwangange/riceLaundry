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
	<title>Rice Laundry App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
	
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



</head>



<body>
	<div class="container">

		<row>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<header class ="header">
				<img src="laundry-icon.svg" alt="laundry icon" height="50px">
				<h1>RICE LAUNDRY</h1>
			</header>

			<main class="main">
				<h2>sign up</h2>
				<form method = "post" action="registerConfirm.php">
						
						<input type="text" placeholder="new username" name="username" required>
						<input type="password" placeholder="new password" name="password" required>
						<!--<input type="password" placeholder="confirm password" name="psw" required> -->

						<select name="college">
						  	<option id="rescol">residential college</option>
							<option value="Baker">Baker</option>
							<option value="Will Rice">Will Rice</option>
							<option value="Hanszen">Hanszen</option>
							<option value="Wiess">Wiess</option>
							<option value="Jones">Jones</option>
							<option value="Brown">Brown</option>
							<option value="Lovett">Lovett</option>
							<option value="Sid Rich">Sid Rich</option>
							<option value="Martel">Martel</option>
							<option value="McMurtry">McMurtry</option>
							<option value="Duncan">Duncan</option>	
						</select>

						<div class="clearfix">
							<button type="submit">CREATE ACCOUNT</button>
						</div>

			</form>
			<a href="login.php"><p>have an account? sign in</p></a>
		</main>
		</div>
		</row>
	</div>
</body>
</html>