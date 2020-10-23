<html>
<head>

<title>Contactenos</title>
 <link rel="stylesheet" href="estilos.css"/>





  <script type="text/javascript">
window.onload = function() {
 document.getElementById("op3").style.background='blue';
}</script>
<script>
function contactar()
{

   var nombre = document.pri.nombre.value;
   var correo = document.pri.correo.value;
   var telefono = document.pri.telefono.value;
   var asunto = document.pri.asunto.value;
   
   expresion = /\w+@\w+\.+[a-z]/;

   
  
  

if( telefono.length < 6 ){ 
alert("un telefono debe tener mas de 5 cifras ");
return false; 
}

if(!expresion.test(correo)){
  alert("correo no valido");
  return false;
}

   alert("Muchas gracias, le contactaremos lo antes posible ");
  
    
}
</script>

</head>

<body>
<?php 
include 'menu.php' ?>
<div id="soldados">

<img src="img/soldados.png" id="soldados"/>

</div>
<br><br><br><br><br>
<center id="col">
  <font color="white" face="Comic Sans MS,arial" size="4">
<h2>¿Está pensando en vender antigüedades?</h2>
<h1>Contactenos </h1>
</font>
</center>
<br><br><br><br><br><br><br><br>
  <font color="blue" >
<center>
<h2>Preguntas? Siéntete libre de contactarnos. ¡Te responderemos antes de 24 horas!</h2>
<h1>Hable con nosotros por aquí</h1>
</center>
</font>
<div id="contacto">

<p>Si desea vender objetos antiguos o piezas de coleccionismo, póngase en contacto </p>
<p>con nosotros a través de este formulario o visite nuestro local en el Rastro de </p>
<p>Madrid (lunes a viernes de 10:00-14:00 y domingos de 9:30 a 14h).</p>
<p>Puede dirigirse fisicamente a la tienda de Madrid o contactar por aqui</p>
<p> si quiere recibir mas información</p>

 
        <form action="enviarcorreo/enviar.php" name="pri" id="pri" method="post" onsubmit="return contactar()" >
            <br>   <br>  <input type="text"  maxlength="30" placeholder="Escribe tu nombre " id="nombre" name="nombre"/>
             <br> <br><input  type="text"  maxlength="40" placeholder="Escribe tu correo " name="correo"/>
            <br>  <br>      <input  type="number"   maxlength="20" value="" placeholder="Teléfono" name="telefono"/>
      <br><br><textarea  rows="10" cols="50" placeholder="Asunto" name="asunto"></textarea><br> <br> 
                <label>Envíanos un ZIP con las fotos</label><br><br>
                <span>Comprime en un ZIP las fotos de los artículos que te interesa vender</span><br/><br>
                <input id="Field113" name="Field113" type="file" class="field file" size="12" tabindex="4" />   <br><br>
                
                  <input id="Field12" name="Field12" type="checkbox" class="w-checkbox-input" value="Acepto la política de privacidad" tabindex="5"  required   />
                  <label class="w-form-label" for="Field12">Acepto la <span class="onc a-link" onclick="legal()">política de privacidad</span></label><br><br>
       <input  type="submit" name="done" value="enviar"  style="border:  solid #DD1133 5px; font-size: 37pt; background-color:yellow"/>

                </form>  
          </div>
 

      

<?php 
include 'footer.php' ?>
</body>

</html>