<?php
include './db.php';

// Get form data
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users_contact (uname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uname, $email, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
