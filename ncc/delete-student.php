<!DOCTYPE html>

<html>
<head>
	<title>Process Student Registration</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="regnumber"/>
		<inpyt type="submit" value="Delete Student"/>
	</form>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		$dbname = "school";
		

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}


		$sql = "DELETE from student WHERE regnumber='" .$_POST["regnumber"]. "'";

		if (mysqli_query($conn, $sql)) {
  			echo "Record deleted successfully";
			echo "<br>";
			echo "<a href='registered-students.php'>View All Registered Student</a>";
		} else {
  			echo "Error deleting record: " . mysqli_error($conn);
		}
		mysqli_close($conn);
		
	?>




</body>
</html>