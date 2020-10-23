<?php

include '../../conexion.php';


	session_start();
	if (@!$_SESSION['nombre']) {
	header("Location:index.php");
	}
	
	

$nombreusuario=$_SESSION['nombre'];


$delete = " DELETE FROM `comentarios` WHERE id_usuarios in (select id from usuarios where nombre='$nombreusuario')";

header('location:../index2.php');


mysqli_query($con, $delete);

?>