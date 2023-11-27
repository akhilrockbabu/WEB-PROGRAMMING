<?php

//creating connection
$con=new mysqli("localhost","root","","MCA");

//checking connection
if($con->connect_error)
	die("MCA connection failed".$con->connect_error);
else
	echo "MCA connection successfull";
	
//creating table student
$table="CREATE TABLE Student(id INT(2) PRIMARY KEY,name VARCHAR(30) NOT NULL)";

//checking table creation
if($con->query($table)==TRUE)
	echo "Student created successfully";
else
	echo "table creation failed";
$con->close();
?>
