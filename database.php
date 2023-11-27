<?php

//creating connection
$con=new mysqli("localhost","root","");

//checking connection
if($con->connect_error)
	die("connection failed".$con->connect_error);
else
	echo "connection successfull";

//creating database
$db="CREATE DATABASE MCA";

//checking database creation
if($con->query($db)==TRUE)
	echo "MCA database created successfully";
else
	echo "database failed";
	
$con->close();
	
?>
