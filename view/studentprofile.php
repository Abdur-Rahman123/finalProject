<?php
session_start();
	//mysql_connect();
     $username=$_SESSION['user'] ;
	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	
	$sql = "SELECT name,id,cgpa from student WHERE parent='{$username}' ";
	$result = mysqli_query($con, $sql);

	$data = [];


	echo "<table border=1>
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>CGPA</td>
			</tr>";

	while($row = mysqli_fetch_assoc($result)){
		//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
		echo "<tr>
				<td>{$row['name']}</td>
				<td>{$row['id']}</td>
				<td>{$row['cgpa']}</td>
		</tr>";
	}

	echo "</table>";
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="home.php">HOme</a><br>
<a href="logout.php">Logout</a>
</body>
</html>