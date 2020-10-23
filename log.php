<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("conexionregisto.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username' or nombre='$username'");
	if($f=mysqli_fetch_assoc($sql)){    
		if($pass==$f['clave']){
			$_SESSION['id']=$f['id'];
			

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>