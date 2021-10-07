<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
</head>
<body>
<br/>
<?php

$name = $_POST['name'];

$id = $_POST["studentID"];

echo "<h1>Welcome to Lilongwe CEC</h1>";

echo "<p><b>Student Name: </b>".$name."</p>";

echo "<p><b>Student ID: </b>".$id."</p>";

?>

</body>
</html>
