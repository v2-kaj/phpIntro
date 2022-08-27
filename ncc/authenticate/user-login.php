<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Login</title>
	<link rel="stylesheet" href="styles.css"/>
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

		$username =  mysqli_real_escape_string($conn, $_POST["username"]);	
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
				
		$sql = "SELECT * FROM account WHERE username='$username' && password='$password'";
		echo "<div class='row'>";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			echo "<div class='col-6'>";
			echo "<p>User with id:". $row["id"] . " is logged in</p>";
			echo "<a href='page2.php'>Another page for logged in users</a>";
			echo "<br/>";
			echo "<a href=''>Logout</a>";
			echo "</div>";
			echo "<div class='col-6'>More content here<div>";
		} 
		else {
			echo "<div class='col-4'><div>";
			echo "<div class='col-4'>";
  			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "</div>";
			echo "<div class='col-4'><div>";
		}
		echo "</div>";
		mysqli_close($conn);
		
	?>




</body>
</html>