<?php
$conn = new mysqli("boxwhlwosv6kdml5xuhb-mysql.services.clever-cloud.com","u2soczgodi51d7n1","fXSujtXUbMVd667NwTtN","boxwhlwosv6kdml5xuhb");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>