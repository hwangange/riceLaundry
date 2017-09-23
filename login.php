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
	</head>
	<body>
		<div class="container">
		<header class ="header">
			<img src="laundry-icon.svg" alt="laundry icon" height="50px">
			<h1>RICE LAUNDRY</h1>
		</header>
<main class="main">
		<form action="loginConfirm.php" method="post">
	    		<input type="text" placeholder="username" name="username" id = "username" required>
	    		<input type="password" placeholder="password" name="password" id = "password" required>
<!-- 	    		<div>
	    		<input type="checkbox" id="remember" name="remember">
	    		<label for="remember">remember me</label>
	    	</div> -->
	   			<div class="clearfix">
<!-- 	     			<a href="duncan.html"><button type="button" onclick="login()">LOGIN</button></a> -->
	     			<button type = "submit">LOGIN</button>
	   			</div>
					

		</form>
		<a href="register.php"><p>don't have an account? register here</p></a>
	</main>
	</body>
</html>



