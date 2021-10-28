<?php
include('conexion.php');

$correo = $_POST['txtcorreo'];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuario WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario); 
$enviarpass 	= $mostrar['contraseña'];

$paracorreo 		= $correo;
$titulo				= "Recuperar Password";
$mensaje			= "Tu password es: ".$enviarpass;
$tucorreo			= "From: pedromarquezplmf@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviada');window.location= 'validador.php' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'validador.php' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'validador.php' </script>";
}
?>