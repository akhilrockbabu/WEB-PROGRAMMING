<html>
	<head>
		<title>FORM</title>
		<pre>
		<body bgcolor="yellow" align="center">
			<h1 align="center" style="color:red">STUDENT DETAILS</h1>
			<form action="testform.php" method="post">
			
	NAME:		<input type="text" name="name" placeholder="entr your name"><br>
	Address:	<textarea type="text" placeholder="enter your address" name="address"></textarea><br><br>
	password:	<input type="password" name="password" placeholder="enter your password"><br>
	dob:		<input type="date" name="dob"><br>
	<input type="submit" name="next" value="SUBMIT"><br>
	<input type="submit"  value="reset" name="refresh">
			
			</form>
		</body>
		</pre>
	</head>
</html>
<?php
if(isset($_POST['next']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	echo "the value entered=",$name,"<br><br>";
	echo "the value entered=",$address,"<br><br>";
	echo "the value entered=",$password,"<br><br>";
	echo "the value entered=",$dob,"<br><br>";	
}
if(isset($_POST['refresh']))
{
	header("Refresh");
}
?>
	
	
