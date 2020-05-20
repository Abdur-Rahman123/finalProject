<?php
if(isset($_POST['resubmit'])){
	$id = $_POST['id'];
	$review= $_POST['review'];
}
$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
$sql="INSERT INTO review VALUES('{$id}','{$review}') ";
if(mysqli_query($con, $sql)){
	echo "success";
}
else
{
	echo "Error";
}
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