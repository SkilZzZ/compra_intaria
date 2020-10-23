<html>
<head>


  <script type="text/javascript">
window.onload = function() {
 document.getElementById("op2").style.background='blue';
}

</script>

<style type="text/css">meter::-webkit-meter-optimum-value {
    background: #EECE05;
}
</style>
</head>
<body>

<?php 
include 'menu.php';
include 'conexion.php';

?>

<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios ";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$total=  $fila['estrellas'];
 
// Si hay comentarios aparecerán las valoraciones medias de los usuarios

?> 

<center>

  <h3> Valoración media: </h3>
 
  <div  style="border-radius: 150px;background-color: FEFAA8;width: 5%;height: 80px;padding-top: 0.37%;color:BDEE05;border: solid black 3px">
   

  <h1>

 <?php 
 if ($total==0) { ?>        <h1> ¿X?</h1>       <?php }  



$consulta = "SELECT round(AVG(estrellas),2) from comentarios";
$resultado = mysqli_query($con, $consulta);

while ($registro = mysqli_fetch_row($resultado)){

    $medi = $registro[0]; 

}
echo $medi ;
?>
</h1>

</div>





  <?php if ($total>0) { ?>


<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios where estrellas=1";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['estrellas'];
$po=$cuenta*1/$total;
$porcentaje=$cuenta*100/$total;
$round = round($porcentaje,2);  
?> 


<p>1 Estrella <meter style="background:red" align="left" value="<?php echo $po ?>"></meter> <?php echo $round; ?> % </p>

<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios where estrellas=2";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['estrellas'];
$po=$cuenta*1/$total;
$porcentaje=$cuenta*100/$total;
$round = round($porcentaje,2); 

?>

<p>2 Estrellas <meter align="left" value="<?php echo $po ?>"></meter> <?php echo $round; ?> % </p>

<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios where estrellas=3";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['estrellas'];
$po=$cuenta*1/$total;
$porcentaje=$cuenta*100/$total;
$round = round($porcentaje,2); 
?>

<p>3 Estrellas <meter align="left" value="<?php echo $po ?>"></meter> <?php echo $round; ?> % </p>


<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios where estrellas=4";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['estrellas'];
$po=$cuenta*1/$total;
$porcentaje=$cuenta*100/$total;
$round = round($porcentaje,2); 
?>
<p>4 Estrellas <meter align="left" value="<?php echo $po ?>"></meter> <?php echo $round; ?> % </p>


<?php 

$sql = "SELECT COUNT(*) estrellas FROM comentarios where estrellas=5";
$result = $con->query($sql);
$fila = $result->fetch_assoc();
$cuenta=  $fila['estrellas'];
$po=$cuenta*1/$total;
$porcentaje=$cuenta*100/$total;
$round = round($porcentaje,2);

?>


<p>5 Estrellas <meter align="left" value="<?php echo $po ?>"></meter> <?php echo $round; ?> % </p>


 <?php } ?>


   <br>   <br>
    <h1 > OPINIONES DE CLIENTES </h1>
  <?php if ($total==0) { echo "No hay comentarios para usuarios. <br>  Se el primero en comentar"; }   ?>
    
  
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">

	<tr class="bg-dark text-white text-center">
	
	</tr>
	
  <?php
   $t = "SELECT * FROM `comentarios` ORDER BY id DESC limit 10";
    $query = mysqli_query($con,$t);
    while($res = mysqli_fetch_array($query)){		
 ?>
<br>
 <b style="margin-left: -460px">  <?php echo  $res['nombre']; ?>
 <br> </b><p style="margin-left: -440px"> Valoracion: <?php echo $res['estrellas'] ;?> </p>
<p style="margin-left: 300px;margin-top: -30px"><?php  echo $res['fecha'];?></p>
 </center>
<div id="contenedor"><p style="font-style:italic"> <?php echo  $res['comentario'];   ?>   </p> </div> 
   <?php 
	}
   ?> 

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php
 include 'footer.php' ?>
</body>
</html>