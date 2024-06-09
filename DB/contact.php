<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "pet_care"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$uname = $_POST['uname'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$massage = $_POST['massage'];


$stmt = $conn->prepare("INSERT INTO users_contact (uname, email, sub, massage) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $uname, $email, $sub, $massage);


if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
