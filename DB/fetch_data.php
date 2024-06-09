<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}

include './db.php';

$owner_name = $_SESSION['uname'];

$sql = "SELECT * FROM pet_care_forms WHERE owner_name = '$owner_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
   
    echo json_encode($data);
} else {
   
    echo "No data found";
}

$conn->close();
?>
