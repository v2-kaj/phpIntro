<!DOCTYPE html>

<html>
<head>
	<title>Registered Students</title>
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
		echo "<h1>All Registered Students</h1>";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {

		echo "<a href='register_form.php'>Register Another Student</a>";
		echo "<br>";
		echo "<a href='delete-form.php'>Delete Student</a>";
		echo "<br/>";
		echo "<br/>";
		if (mysqli_num_rows($result) > 0) {
			
			echo "<table>";
			echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Reg Number</th>";
			echo "<th>Program</th>";
			echo "</tr>";
			
  			// output data of each row of a table
  			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
    					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["regnumber"]."</td>"; 
					echo "<td>".$row["program"]."</td>";
				echo "</tr>";
  			}
	
		} 
		else {
 	 		echo "0 results";
		}

		mysqli_close($conn);
		
	?>




</body>
</html>