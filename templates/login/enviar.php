<?php

include "../../global/conexion.php";

    session_start();

  $apodo =  $_REQUEST['apodo'];
  $sql = "SELECT correo FROM usuarios WHERE apodo = '$apodo'";

  $sentencia = $pdo->prepare($sql);
  $sentencia -> execute();
  $correo = $sentencia->fetchAll(PDO::FETCH_ASSOC);


  $_SESSION['correo'] = $correo;
  $enviador = 'jecheverri69@misena.edu.co';
  $para      = 'dmatt7779@gmail.com';
  $titulo    = 'melani';
  $mensaje   = 'link de cambio';
  $cabeceras = 'From: '.$enviador;

echo mail($para, $titulo, $mensaje, $cabeceras);
?>


       