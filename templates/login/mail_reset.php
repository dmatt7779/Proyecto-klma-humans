<?php
// Varios destinatarios
$para  =$email . ', '; // atención a la coma

// título
$título = 'Recuperación de contraseña Klma humans';
$codigo= rand(1000,9999);


// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÓDIGO DE RECUPERACIÓN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=PT+Serif:wght@700&family=Raleway:ital,wght@0,500;1,300;1,400;1,500&family=Source+Serif+Pro&display=swap" rel="stylesheet"> 
</head>
<body>
    <div style="text-align:center;"><img style="width: 25%;" src="http://imgfz.com/i/piuxrt4.png" alt="Logo"></div>
    <div style="text-align:center; background-color:#ffffff; margin-top: 3%;">
        <h1 style="font-family: PT Serif, serif; letter-spacing: .3rem; font-size: 10pt;">CÓDIGO DE RECUPERACIÓN</h1>
        <div style="color: #000000; letter-spacing: 0.5rem;">---------------</div>
        <h2 style="font-family: PT Serif, serif; letter-spacing: .3rem; font-size: 14pt; margin: 0.4%;">'.$codigo.'</h2>
        <div style="color: #000000; letter-spacing: 0.5rem;">---------------</div>
        <p style="color: #000000; font-family: Source Serif Pro, serif; letter-spacing: .02rem; font-size: 10pt;">Quedamos atentos a cualquier comunicado o solicitud.</p>
        <p style="color: #000000; font-family: Source Serif Pro, serif; letter-spacing: .02rem; font-size: 10pt;">Muchas gracias.</p>
        <div style="display: inline-flex; margin-top: 2%; margin-bottom: -1%;">
            <h3 style="color: #000000; font-family: Raleway, sans-serif; letter-spacing: 0.277rem; font-style: italic; margin: 0%; font-size: 11pt;">KLMA&apos; </h3>
            <h3 style="color: #000000; font-family: Raleway, sans-serif; font-style: italic; margin: 0%; font-size: 11pt;">humans</h3>
        </div>
        <h4 style="font-family: Raleway, sans-serif; font-style: italic; margin: 0% 0% 0.1% 0%!important;"><a href="http://klmahumans.com/templates/login/reset.php?email='.$email.'&token='.$token.'">www.klmahumans.com </a></h4>
        <p style="color: #000000; font-family: PT Sans, sans-serif; font-style: italic; margin: 0% 0% 0% 0%; font-weight: 600; font-size: 11pt;"> (+57) 3007106853 </p>
        <h5 style="color: #969797; margin: 3% 0% 0% 0%; font-style: italic;"> CONFIDENCIAL </h5>
        <p style="color: #969797; margin: 0%; font-style: italic;"> <small>La información contenida en este mensaje y cualquier archivo adjunto es confidencial y está dirigida exclusivamente a su destinatario.<br>Si este mensaje es recibido por error favor notificar al remitente y proceda a suprimirlo inmediatamente. <br>Cualquier retención, difusión, distribución o copia de este mensaje está prohibida y será sancionada por la ley.  </small> </p>
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