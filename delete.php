<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'display.php'; ?>
     <form method='POST'>
    <input type='number' name='roll_no' placeholder='Enter roll no to be deleted'/>
    <input type='submit' name='submit' value='Delete'/>
    </form>
    <?php
    if (isset($_POST['submit'])) {
    $id = $_POST['roll_no'];
    $conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die($conn->connect_error);

    $sql = "DELETE FROM student_data WHERE roll_no = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error deleting task: " . $conn->error;
    }
} else {
    echo "Task ID not provided.";
}

echo <<<_END
<br><br>
<input type=button onClick="location.href='home.php'" value='Home'>
_END?>
</body>
</html>