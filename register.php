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
	<style>
		input, select {
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
	<main class="main">
		<form method = "post" action="registerConfirm.php">
				<h4>sign up for rice laundry</h4>
				<input type="text" placeholder="new username" name="username" required>
				<br>
				<input type="password" placeholder="new password" name="password" required>
				<!--<input type="password" placeholder="confirm password" name="psw" required> -->


				<select name="college">
				  	<option id="rescol">residential college</option>
					<option value="Baker">Baker</option>
					<option value="Brown">Brown</option>
					<option value="Duncan">Duncan</option>
					<option value="Lovett">Lovett</option>
					<option value="Hanszen">Hanszen</option>
					<option value="Jones">Jones</option>
					<option value="McMurtry">McMurtry</option>
					<option value="Will Rice">Will Rice</option>
					<option value="Wiess">Wiess</option>
					<option value="Sid Rich">Sid Rich</option>
					<option value="Martel">Martel</option>
				</select>


				<div class="clearfix">
					<button type="submit">CREATE ACCOUNT</button>
				</div>
			<a href="login.php"><p>
				have an account? sign in</p></a>
	</form>
</main>
</div>
</body>
</html>