<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}

include './db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $pet_name = $_POST['pet-name'];
    $owner_name = $_POST['owner-name'];
    $pet_type = $_POST['pet-type'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $service_duration = $_POST['service-duration'];
    $owner_address = $_POST['owner-address'];
    $contact_number = $_POST['contact-number'];

    $sql = "UPDATE pet_care_forms SET pet_name = '$pet_name', owner_name = '$owner_name', pet_type = '$pet_type', 
            gender = '$gender', age = $age, service_duration = $service_duration, owner_address = '$owner_address', 
            contact_number = '$contact_number' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Form submitted successfully'); window.location.href='../index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
