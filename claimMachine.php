<?php
	session_start();
  if(isset($_SESSION['user'])) {
    echo "Logged in: " . $_SESSION['user'];
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
    $timer = strval($_POST['timer']);

    $sql = "UPDATE machines SET timer = '$timer', status = 'red' WHERE type = '$machine'";
    $result = $conn->query($sql);

    echo strval($result);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE users SET machine = '$machine' WHERE username = '$user'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    header('Location: index.php');

?>

<html>
<body>



</body>
</html>

