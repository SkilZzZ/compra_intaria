
	<?php
	session_start();
	if (@!$_SESSION['nombre']) {
	header("Location:index.php");
	}
	
	?>

<html lang="en">
 
<body>




<?php

include("include/menu.php");?>


<center>
<br>
  <div class="container">
  <br><br>
  <h1 style="color:yellow" > COMENTA </h1>
  <br>
    <form method="post">
	
	
	  <div class="valoracion" style="color:yellow">
	  <label>valoracion: </label>
    <label for="radio1">1 </label><!--
    --><input id="radio1" type="radio" name="estrellas" value="1" ><!--
	
    --><label for="radio2">2</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="2"><!--
	
    --><label for="radio3">3</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3">
	
    <label for="radio4">4</label>
    <input id="radio4" type="radio" name="estrellas" value="4">
	
	<label for="radio5" name="estrellas" value="5">5</label>
	<input id="radio5" type="radio" name="estrellas" value="5" required>
  </div><br>
       <label>  <textarea name="comentario" cols="80" rows="5" id="textarea" placeholder="Introduce aqui tu comentario"> </textarea></label><br>	<br>	

	   
     <input type="reset" value="cancelar" style="border-radius: 20px;background-color:790303;color: white;padding: 10px"/>

	           <button type="submit" name="done" style="border-radius: 20px;background-color:031379;color: yellow;padding: 10px" > comentar </button><br>


  </form>



</center>


<?php

include '../conexion.php';
if(isset($_POST['done'])){ 

 $estrellas = $_POST['estrellas'];
 $comentario = $_POST['comentario'];
$nombre=$_SESSION['nombre'];

$consultaid= "select * from usuarios where nombre='$nombre'";
$queryid = mysqli_query($con,$consultaid); 
 
    while($res = mysqli_fetch_array($queryid)){
    	$y=$res['id'];

}

$sql = "SELECT COUNT(*) id_usuarios FROM comentarios where id_usuarios=$y";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['id_usuarios'];
$fecha_actual=date("Y") ."-". date("m") ."-". date("d");

if ($cuenta == 0)
{
 $q = " INSERT INTO comentarios VALUES (null, '$nombre', '$comentario',$estrellas,'$fecha_actual',$y)";
  $query = mysqli_query($con,$q); }
   

if ($cuenta >= 1)
{
	
 ?>
<script> alert("No puede haber mas de un comentario a tu nombre");</script>

<?php }


 ?>



<?php 

  $usuarios = "select * from comentarios where id_usuarios in(select id from usuarios where nombre='$nombre')";

    $query = mysqli_query($con,$usuarios);

    while($tag = mysqli_fetch_array($query)){
 ?>
<br>
<div style="float:right;margin-top: -280px;margin-right: 80px">
<h2 style="color:A8FEBE"> Tu comentario </h2>
<textarea style="height: 150px;width: 300px;" readonly=""> <?php echo $tag['comentario'];  ?> </textarea>
</div>

<a style="margin-left: 46%" href="include/borrarcomentario.php?id_usuarios=<?php echo $res['id_usuarios']; ?>" 
class="text-white"><button style="background-color: red; padding: 15px;color:80F649; border-radius: 10px;margin-right: 300px" class="btn-danger btn">  Borrar comentario   </button></a>

<?php
}

 }

  ?>

<?php

include ("footer_login.php")
?>


</body>
</html>