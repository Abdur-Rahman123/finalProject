<?php
	
	//require_once('db.php');

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$sql = "select * from teacherinfo where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "<table border=1>
				<tr>
					<td>Name</td>
					<td>ID</td>
					<td>Subject</td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['name']}</td>
					<td>{$row['id']}</td>
					<td>{$row['subject']}</td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>