<?php

    include ('../../global/config.php');
    include ('../../global/conexion.php');
  
        $usuario = $_POST['nickname'];           
        $contraseña ="'" . $_POST['contraseña'];
        
        $correo = $_POST['correo'];
        date_default_timezone_set("America/Bogota");
        $hoy = date('Y-m-d');
        $fecha_registro =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");
        
        $sql = "INSERT INTO usuarios (apodo, correo, clave, rol, fecha_registro) VALUES ('$usuario', '$correo', $contraseña', '3', '$fecha_registro')";
        
        $ejecutar = mysqli_query($pdo,$sql);   
        
        
    if ($ejecutar) {
        
        
        $_SESSION['creado'] = 1;      
        header('location:registro.php');
        
    }

 

?>