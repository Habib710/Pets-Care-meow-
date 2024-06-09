<?php
session_start();
include './db.php';


$uname = $_POST['uname'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT password FROM users_contact WHERE uname = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if (password_verify($password, $hashed_password)) {
    $_SESSION['uname'] = $uname; 
    header("Location: ../Components/dash.php"); 
    exit();

} else {
    echo "Invalid username or password.";
}


$stmt->close();
$conn->close();
?>
