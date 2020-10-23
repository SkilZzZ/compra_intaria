
	<link rel="stylesheet" href="asd.css"/>


<script>


function primero()
{

   var correo = document.pri.correo.value;
   
      expresion = /\w+@\w+\.+[a-z]/;
if(!expresion.test(correo)){
	alert("correo no valido");
	return false;
}
}



 </script>
<div id="navegador">
<a href="index.php"><img src="img/LOGO2.png" id="img"/></a>

<img src="img/tel.svg" id="img2"/>

<?php 
include 'loginyregistro/indexa.php';

?>


<form onsubmit="return ad()" method="POST" >
	<a href="loginyregistro/registrarse.php" >
<button class="botonregistro"><b><a href="loginyregistro/registrarse.php"> registro </a></b></button></a>

</form>



<li style="color:yellow;float:right;margin-right:670px;font-size:30px;margin-top:-115px;" class="a">609 222 175</li>


<ul id="b" style="margin-top:20px">
<li id="op0"> <a href="quienessomos.php">Quiénes somos</a> </li>
<li id="op1"> <a href="compra.php">Compra de antigüedades </a></li>
<li id="op2"> <a href="comentarios.php">Opiniones</a></li>
<li id="op3"> <a href="contacto.php">Contacto</a></li>
</ul>
</div>  



