<?php
	session_start();
  if(!isset($_SESSION['user'])) {
    header('Location: login.php');
  }

	$db_host = "localhost";
    $db_username = "id3015558_username";
    $db_pass = "laundrysucks";
    $db_name = "id3015558_laundry";

    $conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
    if($conn->connect_error) {
      die("Connection failed" . $conn->connect_error);
    } 
        

	$user = $_SESSION['user'];
    $machine = $_POST['machine'];
    $timer = intval($_POST['timer']);

    $time = intval(time()) + ($timer*60); //time since 1970 in seconds

    $sql = "UPDATE machines SET timer = '$time' WHERE type = '$machine'";
    $result = $conn->query($sql);

   // echo strval($result);

    if ($conn->query($sql) === TRUE) {
      //  echo "Record updated successfully";
        $sql = "UPDATE users SET machine = '$machine' WHERE username = '$user'";
        $result = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
          //  echo "Record updated successfully";
            header('Location: index.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

        
    } else {
        echo "Error updating record: " . $conn->error;
    }

   

?>

<html>
<body>



</body>
</html>

