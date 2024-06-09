<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: Login.html");
    exit();
}

include './db.php';


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $sql = "SELECT * FROM pet_care_forms WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       
        echo '<form method="post" action="update.php">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<label for="pet-name">Pet Name:</label>';
        echo '<input type="text" id="pet-name" name="pet-name" value="' . $row['pet_name'] . '" required><br>';
        echo '<label for="owner-name">Owner Name:</label>';
        echo '<input type="text" id="owner-name" name="owner-name" value="' . $row['owner_name'] . '" required><br>';
        echo '<label for="pet-type">Pet Type:</label>';
        echo '<input type="text" id="pet-type" name="pet-type" value="' . $row['pet_type'] . '" required><br>';
        echo '<label for="gender">Gender:</label>';
        echo '<input type="text" id="gender" name="gender" value="' . $row['gender'] . '" required><br>';
        echo '<label for="age">Age:</label>';
        echo '<input type="number" id="age" name="age" value="' . $row['age'] . '" required><br>';
        echo '<label for="service-duration">Service Duration (in days):</label>';
        echo '<input type="number" id="service-duration" name="service-duration" value="' . $row['service_duration'] . '" required><br>';
        echo '<label for="owner-address">Owner Address:</label>';
        echo '<textarea id="owner-address" name="owner-address" required>' . $row['owner_address'] . '</textarea><br>';
        echo '<label for="contact-number">Contact Number:</label>';
        echo '<input type="tel" id="contact-number" name="contact-number" value="' . $row['contact_number'] . '" required><br>';
        echo '<button type="submit">Update</button>';
        echo '</form>';
    } else {
        echo "Record not found";
    }
} else {
    echo "ID parameter not set";
}
?>

