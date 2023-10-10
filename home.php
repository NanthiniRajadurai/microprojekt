<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<style>
    body{
        text-align : center;
        margin: 50%;
        
    }
</style>
<body>
    <h1>Student Data Entry</h1>
    <input type="button" onClick="location.href='add.php'" value="Add a student">
    <input type="button" onClick="location.href='update.php'" value="Update a student">
    <input type="button" onClick="location.href='delete.php'" value="Delete a student">
        <?php include 'display.php'; ?>
</body>
</html>