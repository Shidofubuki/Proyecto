<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$fecha=$_POST['fecha'];
		$descripcion=$_POST['descripcion'];
	

		if(!empty($nombre) && !empty($direccion) && !empty($fecha) && !empty($descripcion) ){
			if(!filter_var($descripcion)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO servicio(nombre,direccion,fecha,descripcion) VALUES(:nombre,:direccion,:fecha,:descripcion)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':direccion' =>$direccion,
					':fecha' =>$fecha,
					':descripcion' =>$descripcion
				));
				header('Location: /Admistrador/Controlador.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Servicio</title>
	<link rel="stylesheet" href="/css/estilo.css">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/Simbolo tu valle.png">
</head>
<body>
	<div class="contenedor">
		<h2>Insertar Servicios</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="direccion" placeholder="Dirreccion" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="fecha" placeholder="Fecha" class="input__text">
				<input type="text" name="descripcion" placeholder="Descripcion" class="input__text">
			</div>
		
			<div class="btn__group">
				<a href="/Admistrador/Controlador.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
