<!DOCTYPE html>
<html>
<head>
	<title>from</title>
	<script type="text/javascript" src="../service/script.js"></script>
</head>
<body>
<h3>registation</h3>
<form method="POST" action="../service/regCheck.php" enctype="multipart/form-data">
<table border="1">
	<tr>
		<td colspan="3"><center>Personal profile</center></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input id="name" type="text" name="uname" value="" onblur="f1()"></td>
		<td><p id="msg"></p></td>
		<td></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input id="email" type="text" name="uemail" value="" onblur="f2()"></td>
		<td><p id="msg1"></p></td>
		<td></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input id="password" type="password" name="password" value="" onblur="f3()"></td>
		<td><p id="msg2"></p></td>
		<td></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<input id="male" type="radio" name="ugender" value="Male" onblur="f4()">Male
			<input  id="female"type="radio" name="ugender" value="Female" onblur="f4()">Female
			<input id="others" type="radio" name="ugender" value="others" onblur="f4()">others
		</td>
		<td><p id="msg3"></td>
		<td></td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td>
			<input id="day" type="text" name="day" value="" onblur="f5()">
			<input id="month" type="text" name="month" value="" onblur="f5()">
			<input id="year" type="text" name="year" value="" onblur="f5()">
		</td>
		<td><p id="msg4"></p></td>
		<td></td>
	</tr>
	<tr>
	<td>Blood Group</td>
	<td>
		<select id="blood" name="blood" onblur="f6()">
			<option value="choose">choose</option>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="A-">A-</option>
		</select>
	</td>
	<td><p id="msg5"></p></td>
	<td></td>
	</tr>
	<tr>
		<td>Degree</td>
		<td>
			<input id="ssc" type="checkbox" name="degree" value="SSC" onblur="f7()">SSC
			<input id="hsc" type="checkbox" name="degree" value="HSC" onblur="f7()">HSC
			<input id="bsc" type="checkbox" name="degree" value="BSC" onblur="f7()">BSC
			<input id="msc" type="checkbox" name="degree" value="MSC" onblur="f7()">MSC
		</td>
		<td><p id="msg6"></p></td>
		<td></td>
	</tr>
	<tr>
		<td>Child name</td>
		<td><input id="childname" type="text" name="childname" value="" onblur="f7()"></td>
		<td><p id="msg7"></p></td>
		<td></td>
	</tr>
	<tr>
				<td>File Uplaod:</td>
				<td><input id="file" type="file" name="mypic" ></td>
			</tr>
	<tr>
	<tr height=19>
		<td colspan="3">
			
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
	<input type="submit" name="lsubmit" value="submit">
	<input type="reset" name="reset" value="reset">
	</td>
	</tr>
</table>
</form>
</body>
</html>
