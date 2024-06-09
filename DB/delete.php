<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}

include './db.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    

    $sql = "DELETE FROM pet_care_forms WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Deleted successfully'); window.location.href='../index.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID parameter not set";
}
?>
