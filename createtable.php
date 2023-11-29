<?php
$con=new mysqli("localhost","root","");
if($con->connect_error)
	echo "connection failed";
else
	echo "connection success";
	
$db="CREATE DATABASE rockiey";
if($con->query($db)==TRUE)
	echo


