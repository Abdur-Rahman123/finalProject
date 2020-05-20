<?php
if(isset($_REQUEST['lsubmit'])){
session_start();
$name=$_POST['uname'];
$childname=$_POST['childname'];
$uemail=$_POST['uemail'];
$day=$_POST['day'].'|';
$month=$_POST['month'].'|';
$year=$_POST['year'].'|';
$blood=$_POST['blood'];
$password=$_POST['password'];
$degree=$_POST['degree'];
$email=$uemail;
$elength=strlen($email);
$split=$name;
$length=strlen($name);
$plength=strlen($password);
$birth=$day.$month.$year;
$a=0;
if($length>=2 && !empty(trim($name)) && is_numeric($name)==false)
{
	$a=$a+1;
}
else
{
	echo("name can't be empty/can't start with nuber/length must atleast 3<br>");
}
if($plength>5)
{
	$a=$a+1;
}
else
{
       echo "password should be atleast 6<br>";
}
	
if(!empty(trim($email))&& $email[$elength-4]=='.' && strpos($email,'@')!=false)
{
	$a=$a+1;
}	
else
{
	echo("email can't be empty/should content @ <br>");
}
  
if(isset($_POST['ugender']))
{
	$a=$a+1;
}else
{
	echo("select  gender<br>");
}
if(!empty(trim($day)) && !empty(trim($month)) && !empty(trim($year))&& $day>=0 || $day<=31 && $month>=1|| $month<=12 && $year>=1900 || $year<=2016)
{
	$a=$a+1;
      
}
else
{
	echo("use correct date<br>");
}
if(isset($_POST['degree']))
{
	$a=$a+1;
}
else
{
	echo("choose degree<br>");
}
if($blood=="choose")
{
	echo("choose blood group<br>");
}
else
{
	$a=$a+1;
}
if($length>=2 && !empty(trim($childname)) && is_numeric($childname)==false)
{
	$a=$a+1;
}
else
{
	echo("name can't be empty/can't start with nuber/length must atleast 3<br>");
}
$filename = $_FILES['mypic']['name'];
		$dest = "upload/".$filename;
		$src = $_FILES['mypic']['tmp_name'];

		if(move_uploaded_file($src, $dest)){
			//echo "success";
		}else{
			echo "Error";
		}
if($a>6){
	$gender=$_POST['ugender'];
	$degree=$_POST['degree'];
	if(isset($_POST['lsubmit'])){
		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/

		$sql = "insert into register values('{$name}','{$email}','{$password}', '{$gender}','{$birth}','{$blood}','{$degree}','{$childname}')";
		if(mysqli_query($con, $sql)){
			header("location:login.php");
		}else{
			echo "Error";
		}
	}
}
}
?>