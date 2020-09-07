<?php

require ('../conexion/conexion.php');

    session_start();

  $apodo =  $_REQUEST['apodo'];
  $sql = "SELECT correo FROM usuarios WHERE apodo = '$apodo'";
    
  $ejecutar = mysqli_query($conexion,$sql);  
  $array = mysqli_fetch_array($ejecutar);

  $correo = $array['correo'];
  $_SESSION['correo'] = $correo;
  //echo json_encode($correo);
  $para      = 'jecheverri69@misena.edu.co';
$titulo    = 'melani';
$mensaje   = 'link de cambio';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo mail($para, $titulo, $mensaje, $cabeceras);
?>


       