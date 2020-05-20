
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
		Login Page 
	</h1>
	<form method="POST" action="../service/logCheck.php">
		Username: <input type="text" name="uname" value=""> <br>

		Password: <input type="password" name="password" value=""><br>
		<input type="submit" name="submit" value="Submit"><br>
		<h3>don't register yet?<a href="from.php">rgister</a></h3>
	</form>
</body>
</html>