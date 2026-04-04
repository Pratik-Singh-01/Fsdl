<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Students</h2>";
echo "<table border='1'>
<tr>
<th>ID</th><th>Name</th><th>Roll</th><th>Contact</th><th>Action</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['first_name']} {$row['last_name']}</td>
    <td>{$row['roll_no']}</td>
    <td>{$row['contact']}</td>
    <td>
        <a href='delete.php?roll={$row['roll_no']}'>Delete</a> |
        <a href='update.php?roll={$row['roll_no']}'>Update</a>
    </td>
    </tr>";
}

echo "</table>";
?>