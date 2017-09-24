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

    $data = array();
    $result = $conn->query($sql);

    $existCount = mysqli_num_rows($conn->query($sql));
   
    if($existCount == 1) { 
      $_SESSION['user'] = $_POST["username"];
      while ($row = $result->fetch_assoc()) {
         $_SESSION['college'] = $row['college'];
      }
      header('Location: index.php');
    } else {
       die('Sorry, the username and password do not match.');      
    }

    

   


?>