<?php	

    $db_host = "localhost";
    $db_username = "id3015558_username";
    $db_pass = "laundrysucks";
    $db_name = "id3015558_laundry";

    $conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
    if($conn->connect_error) {
      die("Connection failed" . $conn->connect_error);
    } 

    $sql = "SELECT * FROM machines";
    $data = array();
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
       $data[] = $row;
    }
    echo json_encode($data);


?>