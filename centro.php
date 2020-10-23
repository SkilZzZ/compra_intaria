<SCRIPT LANGUAGE="javascript">
<!--
function makeArray(n) {
this.length = n;
for (var i=1; i<=n; i++) {
this[i] = "";
}
return this;
}
var i;
function imagealeatoire() {
i = Math.floor(5 * Math.random() + 1);
return image[i];
}
image = new makeArray(5);
image[0]="img/centro/militaria.jpg";
image[1]="img/centro/militaria_esp.jpg";
image[2]="img/centro/militaria-fran.jpg";
image[3]="img/centro/militaria-itaL.jpg";
image[4]="img/centro/militaria-rusas.jpg";
image[5]="img/centro/militaria-US.jpg";


</SCRIPT>

<div id="compra" > <a class="boton reverse w-button" href="http://www.todocoleccion.net/tienda/collectzona" target="_blank">¿Qué vendemos?</a>

<img id="fotocompramos" src="img/compramos.jpg" style="height: auto;width:auto" />

<div id="mil"><img><SCRIPT language="javascript"> document.write("<IMG SRC=" +imagealeatoire() +" WIDTH=100% HEIGHT=100% BORDER=0>");</SCRIPT></img></div>

</div>
