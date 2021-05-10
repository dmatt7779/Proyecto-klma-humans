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
    <title>Código para restablecer contraseña</title>
</head>
<body>
    <h1>Klma humans</h1>
    <div style="text-align:center; background-color:#ccc">
        <p>Restablecer contraseña</p>
        <h3>'.$codigo.'</h3>
        <p> <a 
            href="http://klmahumans.com/templates/login/reset.php?email='.$email.'&token='.$token.'"> 
            para restablecer da click aqui </a> </p>
        <p> <small>Si no solicitaste el cambio de contraseña, por favor omitir este email.</small> </p>
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