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
    $college = $_POST["college"];

    $sql = "INSERT INTO users (username, password, college, machine) VALUES ('$username', '$password', '$college', 'none')";

    if ($conn->query($sql) === TRUE) {
      header('Location: login.php');
    } else {
       die('Failed to register.');      
    }


?>