<!DOCTYPE html>

<html>
<head>
	<title>Process Student Registration</title>
</head>
<body>
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

		$name = $_GET["name"];	
		$regnumber = $_GET["reg_number"];	
		$program = $_GET["program"];	

		$sql = "INSERT INTO student (regnumber, name, program) VALUES ('$regnumber', '$name', '$program')";
		
		//Execute the sql
		if (mysqli_query($conn, $sql)) {
	
 		 	echo "Student registered";
		} 
		else {
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	?>




</body>
</html>