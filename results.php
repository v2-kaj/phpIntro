<!DOCTYPE html>
<html>
<head>
<title>Results</title>
</head>
<body>
<?php

$conn = mysqli_connect("localhost", "webadmin", "twenty21", "school");

if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}

$id=$_POST["studentID"];
$q="SELECT id, name,unit1, unit2, unit3, unit4, unit5 FROM results WHERE id='$id'";

$res=mysqli_query($conn, $q); //Connect to the database

if (mysqli_num_rows($res)>0) {

$student = mysqli_fetch_assoc($res);

echo"<h1>Welcome ".$student["name"]."</h1>";

echo "<p>Here are your results</p>";

echo "<table>
<tr>
<th>Unit</th>
<th>Marks</th>
</tr>
<tr>
<td>Unit 1 </td>
<td>".$student["unit1"]."</td>
</tr>
<td>Unit 2 </td>
<td>".$student["unit2"]."</td>
</tr>
<td>Unit 3 </td>
<td>".$student["unit3"]."</td>
</tr>
<td>Unit 4 </td>
<td>".$student["unit4"]."</td>
</tr>
<td>Unit 5 </td><td>".$student["unit5"]."</td>
</tr>
</table>";
}

else {
mysqli_close($conn);
echo "<h1>No student found with ID: ".$id."</h1>";
}

?>

</body>
</html>
