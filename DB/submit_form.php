<!-- submit_form.php -->
<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}

include './db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_name = $_POST['pet-name'];
    $owner_name = $_SESSION['uname'];
    $pet_type = $_POST['pet-type'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $service_duration = $_POST['service-duration'];
    $owner_address = $_POST['owner-address'];
    $contact_number = $_POST['contact-number'];
   

    $sql = "INSERT INTO pet_care_forms (pet_name, owner_name, pet_type, gender, age, service_duration, owner_address, contact_number) 
            VALUES ('$pet_name', '$owner_name', '$pet_type', '$gender', $age, $service_duration, '$owner_address', $contact_number)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Form submitted successfully'); window.location.href='../index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
