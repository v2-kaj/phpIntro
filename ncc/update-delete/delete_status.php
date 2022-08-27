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
		$postid = $_GET["id"];
		
		$sql = "DELETE FROM Post WHERE id=$postid";
		
		//Execute the sql
		if(mysqli_query($conn, $sql)){
			echo "<p>Status Deleted</p>";
			echo "<a href='posts.php'>View all status</a>";
		}
		else{
			echo "Something went wrong";
		}
		
		mysqli_close($conn);
		
	?>

</body>
</html>