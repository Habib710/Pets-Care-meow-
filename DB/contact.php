<?php
// Database credentials
$servername = "localhost";
$username = "root"; 
$password = ""; // Replace with your database password
$dbname = "pet_care"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$uname = $_POST['uname'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$massage = $_POST['massage'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users_contact (uname, email, sub, massage) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $uname, $email, $sub, $massage);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
