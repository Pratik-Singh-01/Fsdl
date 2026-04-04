<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$contact = $_POST['contact'];

$sql = "UPDATE students 
SET first_name='$fname', last_name='$lname', contact='$contact'
WHERE roll_no='$roll'";

if ($conn->query($sql)) {
    echo "Updated <a href='view.php'>Back</a>";
} else {
    echo "Error";
}
?>