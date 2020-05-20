<?php
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['uname'];
	$password = $_POST['password'];
}
$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
$sql="SELECT * FROM `register` WHERE name='{$username}' AND password='{$password}' ";
$result = mysqli_query($con, $sql);
//$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0)
{
   $_SESSION['user'] = $username;
   header("location:home.php");
}
		else{
			echo "invalid username/password";

}
?>