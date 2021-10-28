<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM servicio WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: /Admistrador/Controlador.php');
	}else{
		header('Location: /Admistrador/Controlador.php');
	}
?>