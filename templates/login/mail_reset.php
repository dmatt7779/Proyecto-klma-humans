<?php
// Varios destinatarios
$para  =$email . ', '; // atención a la coma

// título
$título = 'Restablecer password';
$codigo= rand(1000,9999);


// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÓDIGO DE RECUPERACIÓN</title>
</head>
<body>
    <div><img src="../assets/img/K-2.png alt="Logo Company"></div>
    <div style="text-align:center; background-color:#ffffff">
        <h1>CÓDIGO DE RECUPERACIÓN</h1>
        <p>-----------------------</p>
        <h2>'.$codigo.'</h2>
        <p>-----------------------</p>
        <p>Quedamos atentos a cualquier comunicado o solicitud.</p>
        <p>Muchas gracias.</p>
        <h3>KLMA'"'"' humans</h3>
        <h4><a href="http://klmahumans.com/templates/login/reset.php?email='.$email.'&token='.$token.'">www.klmahumans.com </a></h4>
        <p> (+57) 3007106853 </p>
        <h5> CONFIDENCIAL </h5>
        <p> <small>La información contenida en este mensaje y cualquier archivo adjunto es confidencial y está dirigida exclusivamente a su destinatario.<br>Si este mensaje es recibido por error favor notificar al remitente y proceda a suprimirlo inmediatamente. <br>Cualquier retención, difusión, distribución o copia de este mensaje está prohibida y será sancionada por la ley.  </small> </p>
    </div>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}
?>