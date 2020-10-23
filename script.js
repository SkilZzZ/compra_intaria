function contactar()
{

   var nombre = document.pri.nombre.value;
   var correo = document.pri.correo.value;
   var telefono = document.pri.telefono.value;
   var asunto = document.pri.asunto.value;
   
   expresion = /\w+@\w+\.+[a-z]/;

   
   if(nombre.length == 0 || correo.length == 0 ||asunto.length == 0 ||telefono.length == 0 ){ 
alert("Has dejado algun campo vacío, por favor revísalo");
return false; 
}

if( telefono.length < 6 ){ 
alert("un telefono debe tener mas de 5 cifras ");
return false; 
}

if(!expresion.test(correo)){
  alert("correo no valido");
  return false;
}
      
   alert("Muchas gracias, le contactaremos lo antes posible ");
   return true;
    
}