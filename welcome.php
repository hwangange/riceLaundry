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
        

	  $username =  $_POST["username"];
      $password = $_POST["password"];



      $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
      $existCount = mysqli_num_rows($conn->query($sql));
     
      if($existCount == 0) { 
        die('Sorry, the username and password do not match.');
      } else {


        echo "Logged In";
        
       
        
      }
?>

<html>
<body>

Welcome <?php echo $_POST["username"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>

