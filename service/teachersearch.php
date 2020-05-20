<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form >
		Search:<input type="text" id="term" name="term" onkeyup="abc()">
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "Checkteacher.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
	<a href="home.php">HOme</a><br>
<a href="logout.php">Logout</a>
</body>
</html>