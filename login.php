
<?php
//include("conexionregisto.php");

session_start();
	require("conexionregisto.php");

	$username=$_POST['email'];
	$pass=$_POST['clave'];

	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['clave']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['nombre'];
            $_SESSION['fecha_nac']=$f['fecha_nac'];
            $_SESSION['cod_postal']=$f['cod_postal'];

			header("Location: loginyregistro/index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='comentarios.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		echo "<script>location.href='index.php'</script>";	
	}

?>