<!DOCTYPE html>
<html>
<body>

<h2>Student Registration</h2>

<form method="POST" action="insert.php">
    First Name: <input type="text" name="fname" required><br><br>
    Last Name: <input type="text" name="lname" required><br><br>
    Roll No: <input type="text" name="roll" required><br><br>
    Password: <input type="password" name="pass" required><br><br>
    Confirm Password: <input type="password" name="cpass" required><br><br>
    Contact: <input type="text" name="contact" required><br><br>

    <input type="submit" value="Register">
</form>

<br>
<a href="view.php">View Students</a>

</body>
</html>