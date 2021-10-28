<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM servicio WHERE id=:id');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: /Admistrador/Controlador.php');
	}
	
    if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$fecha=$_POST['fecha'];
		$descripcion=$_POST['descripcion'];
		$id=(int) $_GET['id'];
    
        
        $cnx = mysqli_connect('boxwhlwosv6kdml5xuhb-mysql.services.clever-cloud.com','u2soczgodi51d7n1','fXSujtXUbMVd667NwTtN','boxwhlwosv6kdml5xuhb');
        $sql = "UPDATE servicio set nombre='$nombre', direccion='$direccion', fecha='$fecha', descripcion='$descripcion' WHERE id = '$id'";
        $rta = mysqli_query($cnx, $sql);
        header("Location: /Admistrador/Controlador.php");
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Cliente</title>
	<link rel="stylesheet" href="/css/estilo.css">
	<link rel="icon" href="/images/Simbolo tu valle.png">
</head>
<body>
	<div class="contenedor">
		<h2>Editar Servicios</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
				<input type="text" name="direccion" value="<?php if($resultado) echo $resultado['direccion']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="fecha" value="<?php if($resultado) echo $resultado['fecha']; ?>" class="input__text">
				<input type="text" name="descripcion" value="<?php if($resultado) echo $resultado['descripcion']; ?>" class="input__text">
			</div>
			
			<div class="btn__group">
				<a href="/Admistrador/Controlador.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
