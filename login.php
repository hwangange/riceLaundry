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
		<link rel="stylesheet" href="styles.css">
		<title>Rice Laundry App</title>
		<script src="script.js"></script>
		</script>
	</head>
	<body>
		<div class="container">
		<header class ="header">
			<img src="laundry-icon.svg" alt="laundry icon" height="50px">
			<h1>RICE LAUNDRY</h1>
		</header>
		<form action="loginConfirm.php" method="post">
			<input type="text" placeholder="username" name="username" id = "username" required>
			<input type="password" placeholder="password" name="password" id = "password" required>
			<div class="checkbox">
				<span><label><input type="checkbox" name="remember">
				Remember me</label></span>
			</div>
			<div class="clearfix">
				<button type = "submit">LOGIN</button>
			</div>
		</form>
		<a href = "register.php"><p>don't have an account? register here</p></a>
		</div>
	</body>
</html>



