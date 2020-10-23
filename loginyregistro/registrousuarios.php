<script>
  

function registro()
{

   var nombre = document.pri.nombre.value;
   var email = document.pri.email.value;
    var codigo_postal = document.pri.codigo_postal.value;

   
   expresion = /\w+@\w+\.+[a-z]/;

   
   if(nombre.length == 0 || email.length == 0 || codigo_postal.length == 0 ){ 
alert("Has dejado algun campo vacío, por favor revísalo");
return false; 
}


if(!expresion.test(email)){
  alert("correo no valido");
  return false;
}
      
   
    
}


</script>

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


$checknombre=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre='$nombre'");
	$check_nombre=mysqli_num_rows($checknombre);


		if($contra==$rpass){

if($check_nombre>0){echo ' <script language="javascript">alert("Error.No pueden haber dos usuarios con el mismo");</script> ';}
else {
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';

			}else{
				

				mysqli_query($mysqli,"INSERT INTO usuarios VALUES(null,'$nombre','$mail','$contra','$fecha_nac',$codigo)");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			} }
			
		}else{ ?>
			<script type="text/javascript">alert("las contrasreñas no coinciden");</script>
	<?php	}
?>