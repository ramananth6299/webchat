<?php

$conn = mysqli_connect("localhost","id13923716_abc","Myparentsrock@6299","id13923716_mydb");
if (!$conn) {
	
	die("connection failed".mysqli_connect_error());
}
mysqli_select_db($conn,"id13923716_mydb");


?>