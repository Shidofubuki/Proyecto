<?php

include('conexion.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];

//Para iniciar sesión

$queryusuario = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='$correo' and contraseña = '$pass'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1)  
	{ 
	echo	"<script> alert('Usuario logueado.');window.location= '/Usuario/Usuario.php' </script>";
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'validador.php' </script>";
	}

/*VaidrollTeam*/
?>
