
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE email='$username' or nombre='$username' ");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['clave']){
			
			$_SESSION['nombre']=$f['nombre'];
		header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}

?>