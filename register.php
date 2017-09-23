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
		<h2>sign up</h2>
		<form action="/action_page.php">
				<input type="text" placeholder="new username" name="username" required>
				<br>
				<input type="password" placeholder="new password" name="psw" required>
				<input type="password" placeholder="confirm password" name="psw" required>


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
					<button type="button" onclick="createaccount()">CREATE ACCOUNT</button>
				</div>
			<a href="login.php"><p>
				have an account? sign in</p></a>
	</form>
</main>
</div>
</body>
</html>