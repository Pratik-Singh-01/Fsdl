<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$contact = $_POST['contact'];

if ($pass != $cpass) {
    die("Passwords do not match");
}

$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO students (first_name, last_name, roll_no, password, contact)
VALUES ('$fname', '$lname', '$roll', '$hash', '$contact')";

if ($conn->query($sql)) {
    echo "Inserted successfully <br><a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}
?>