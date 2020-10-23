<html>
<head>
<style>
label{color:white;font-size: 14pt;  display: inline-block;
  width: 220px;  margin-top: 1em;}
</style>
	<meta charset="utf-8">
</head>
<body background="https://articles-images.sftcdn.net/wp-content/uploads/sites/2/2017/05/wallpaper.jpg">
	<center>
		<div class="Ingreso">


<br><br><br>
<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt" ><h1 style="color:red";>Registro</h1></legend>
    <div class="form-group">
      <label>Ingresa tu nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label>Ingresa tu email</label>
      <input type="mail" name="email" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
	 
	
	 <label> fecha de nacimiento: </label>
    <input type="date" name="fecha_nacimiento" class="form-control"> <br>
	
	
		 <label> codigo postal: </label>
    <input type="number" name="codigo_postal" class="form-control" required placeholder="ingresa tu codigo postal"> <br>
	

    </div>
	

    <input style="width:150px; height:40px" type="submit" name="submit" value="Registrarse"/>
	<br><br>
	<button style="width:150px; height:40px"><a href="index.php"> atras </a></button><br>
	


  </fieldset>
</form>
</div>

<?php
		if(isset($_POST['submit'])){
			require("registrousuarios.php");
		}
	?>

	</center>

	
</body>
</html>