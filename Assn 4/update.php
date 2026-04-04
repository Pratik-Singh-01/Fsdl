<?php
include 'db.php';

$roll = $_GET['roll'];
$result = $conn->query("SELECT * FROM students WHERE roll_no='$roll'");
$row = $result->fetch_assoc();
?>

<form method="POST" action="update_process.php">
    <input type="hidden" name="roll" value="<?php echo $row['roll_no']; ?>">

    First Name: <input type="text" name="fname" value="<?php echo $row['first_name']; ?>"><br><br>
    Last Name: <input type="text" name="lname" value="<?php echo $row['last_name']; ?>"><br><br>
    Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br><br>

    <input type="submit" value="Update">
</form>