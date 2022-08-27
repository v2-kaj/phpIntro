<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Edit Status</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>
	<?php
		$servername = "localhost";	
		$username = "root";
		$password = "";
		$dbname = "social_network";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		}

		$user = $_SESSION["user_id"];	
		$postid = $_GET["pid"];
		
		$sql = "SELECT status FROM Post WHERE id=$postid";
		
		//Execute the sql
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			$_SESSION["postid"]=$postid;
			$row = mysqli_fetch_assoc($result);
			echo "<div class='row'>";
				echo "<div class='col-2'></div>";
				echo "<div class='col-8'>";
					echo "<form action='save_edited_status.php' method='post'>";
						echo "<input type='text' name='edited_status' value='$row[status]'>";
						echo "<br>";
						echo "<br/>";
						echo "<input type='submit' value='Submit'>";
					echo "</form>";
				echo "<div>";
				echo "<div class='co-2'></div>";
			echo "</div>";


		}
		else{
			echo "No post found";
		}
		
		mysqli_close($conn);
		
	?>



</body>
</html>