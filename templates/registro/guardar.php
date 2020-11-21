<?php

    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');
  
    $usuario = $_POST['nickname']; 
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $hoy = date('Y-m-d');
    $fecha_registro =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");
    
    $sql = "INSERT INTO usuarios (apodo, correo, clave, rol, fecha_registro) VALUES ('$usuario', '$correo', '$contrasena', '3','$fecha_registro')";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    if( !$register ){
        $_SESSION['creado'] = 1;      
        header('location:registro.php');
    } 
?>