<?php
	$database="boxwhlwosv6kdml5xuhb";
	$user='u2soczgodi51d7n1';
	$password='fXSujtXUbMVd667NwTtN';


try {
	
	$con=new PDO('mysql:host=boxwhlwosv6kdml5xuhb-mysql.services.clever-cloud.com;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>