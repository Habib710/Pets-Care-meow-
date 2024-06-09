<?php
session_start();
include './db.php';

// Get form data
$uname = $_POST['uname'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT password FROM users_contact WHERE uname = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if (password_verify($password, $hashed_password)) {
    $_SESSION['uname'] = $uname; // Store username in session
    header("Location: ../Components/dash.php"); // Redirect to dashboard
    exit();

} else {
    echo "Invalid username or password.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
