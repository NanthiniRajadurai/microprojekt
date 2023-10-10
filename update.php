<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php include 'display.php'; ?>
    <h3>Enter the roll Number that should be edited</h3>
    <form method='POST'>
        <input type='text' name='name' placeholder='Student Name'/>
        <input type='number' name='roll_no' placeholder='Roll Number'/>
        <input type='text' name='f_name' placeholder='Father Name'/>
        <input type='text' name='m_name' placeholder='Mother Name'/>
        <input type='text' name='number' placeholder='Contact Number'/>
        <input type='submit' name='submit' value='Submit'/>
    </form>
</body>
<?php
    require_once 'connection.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);
if(isset($_POST['submit'])){
$name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $contact = $_POST['number'];
$sql = "update student_data set name='$name', roll_no=$roll_no, f_name='$f_name',m_name='$m_name', contact='$contact' where roll_no=$roll_no;";
$result = $conn->query($sql);
if (!$result) die ("Database access failed: " . $conn->error);
echo "Task added successfully";
$conn->close();
}
echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END
?>
</html>