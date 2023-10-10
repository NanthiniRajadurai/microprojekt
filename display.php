<?php
require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
$sql = "SELECT * FROM student_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Student List</h2>";
    echo "<table align='center' border=1> <tr> <td> Name</td> <td>Roll Number</td> <td>Father Name</td><td>Mother Name</td> <td> Contact number </td> </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['name']}</td> <td>{$row['roll_no']}</td><td>{$row['f_name']}</td><td>{$row['m_name']}</td><td>{$row['contact']}</td></tr>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}
$conn->close();
?>