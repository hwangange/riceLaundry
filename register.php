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
</head>
<body>
	<div class="container">
	<header class ="header">
		<img src="laundry-icon.svg" alt="laundry icon" height="50px">
		<h1>RICE LAUNDRY</h1>
	</header>
	<main class="main">
		<form action="/action_page.php">
				<h4>sign up for rice laundry</h4>
				<input type="text" placeholder="new username" name="username" required>
				<br>
				<input type="password" placeholder="new password" name="psw" required>
				<input type="password" placeholder="confirm password" name="psw" required>
				<div class="dropdown">
    			<button class="btn btn-default dropdown-toggle" class="selectBox" type="button"
					id="menu1" data-toggle="dropdown">your college
    			<span class="caret"></span></button>
    			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
	      			<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Baker</a></li>
	      			<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brown</a></li>
	      			<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Duncan</a></li>
	      			<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hanszen</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jones</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lovett </a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Martel</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">McMurtry</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Will Rice</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sid Rich</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Wiess</a></li>
    			</ul>
  			</div>
				<div class="clearfix">
					<button type="button" onclick="createaccount()">CREATE ACCOUNT</button>
				</div><br>
			<a href="index.php"><p>
				have an account? sign in</p></a>
	</body>
	</html>