<?php
include './db.php';


$uname = $_POST['uname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); 


$stmt = $conn->prepare("INSERT INTO users_contact (uname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uname, $email, $password);


if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
