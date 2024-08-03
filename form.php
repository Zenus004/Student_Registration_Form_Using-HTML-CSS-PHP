<?php
include 'connector.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $residential_type = implode(', ', $_POST['residential-type']);
    $course = $_POST['course'];

    $sql = "INSERT INTO students (first_name, last_name, email, dob, gender, residential_type, course) 
            VALUES ('$first_name', '$last_name', '$email', '$dob', '$gender', '$residential_type', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "Your Form Has Been Submitted. Thank You For Visting us.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>