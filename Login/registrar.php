<?php
//Para registrar
include('conexion.php');

$correo		  = $_POST["txtcorreo"];
$contraseña	  = $_POST["txtpassword"];
$nombre		  = $_POST["txtnombre"];
$apellido	  = $_POST["txtapellido"];
$direccion	  = $_POST["txtdireccion"];
$telefono	  = $_POST["txttelefono"];



$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuario WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO usuario(correo, contraseña, nombre, apellido, direccion, telefono) values ('$correo','$contraseña','$nombre','$apellido','$direccion','$telefono')";
	

if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usu');window.location= 'validador.php' </script>";
}
    else 
{
		echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'validador.php' </script>";
}
?>