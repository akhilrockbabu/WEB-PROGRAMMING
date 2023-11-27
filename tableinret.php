<?php

//creating connection
$con=new mysqli("localhost","root","","MCA");

//checking connection
if($con->connect_error)
	die("MCA connection failed".$con->connect_error);
else
	echo "MCA connection successfull";
	
//table insertion 1	
$table1="INSERT INTO Student(id,name)VALUES(1,'AKHIL')";
query($table1);
$con->close();
?>
