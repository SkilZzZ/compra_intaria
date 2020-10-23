<?php

	$nombre=$_POST['nombre'];
	$mail= $_POST['email'];
	$contra=$_POST['pass'];
	$rpass=$_POST['rpass'];
	$fecha_nac=$_POST['fecha_nacimiento'];
	$codigo=$_POST['codigo_postal'];
	

	
	require("conexionregisto.php");
	
		
		
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($contra==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				

				mysqli_query($mysqli,"INSERT INTO usuarios VALUES(null,'$nombre','$mail','$contra','$fecha_nac',$codigo)");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}
?>