
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

header("location:../contacto.php");

$bookid = $_POST["correo"]; //Ya tienes el valor del input en una variable PHP, ahora ya haz lo que desees con ella
$t='asd';

echo $t;
echo $bookid ;

$tel = $_POST["telefono"];
$nombre = $_POST["nombre"];
$asunto = $_POST["asunto"];


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';   // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'militarantiguedades23423@gmail.com';  //podeis logearos con esto para eso lo he creado         
    $mail->Password   = 'claveclave';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($bookid, 'Juuancito');
    $mail->addAddress('militarantiguedades23423@gmail.com', 'Joe User');     // Add a recipient
   

   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'vender tus antiguedades ';
    $mail->Body    ='nombre: '. $nombre . " ---- "."correo: " .$bookid .  "----"  .  "\ntelefono: " .$tel ."----".'ASUNTO'.$asunto;




    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo 'Hubo un error al enviar el mensaje' , $mail->ErrorInfo;
} ?>