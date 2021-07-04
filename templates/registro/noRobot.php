<?php
date_default_timezone_set("America/Bogota");
include "../../global/conexion.php";
include "recaptcha.php";

$opciones = [
    'cost' => 12,
];

if($_POST['google-response-token']){
    $googleToken = $_POST['google-response-token'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$googleToken}");
    $response = json_decode($response);

    $response = (array) $response;
    /* print_r($response);
    exit; */

    if($response['success'] && ($response['score'] && $response['score'] > 0.5)){
        $usuario = $_POST['nickname']; 
        $contrasena = $_POST['contrasena'];
        $correo = $_POST['correo'];
        $hoy = date('Y-m-d');
        $fecha_registro =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");
        $hash = password_hash($contrasena, PASSWORD_DEFAULT, $opciones);

       $sql = "INSERT INTO usuarios (apodo, correo, clave, rol, fecha_registro) VALUES ('$usuario', '$correo', '$hash', '3','$fecha_registro')";
    
        $sentencia = $pdo->prepare( $sql );
        $sentencia -> execute();
        $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
        if( !$register ){
            $_SESSION['creado'] = 1;      
            header('location:registro.php');
        }
    }else {
        echo "<div class='alert alert-warning'> Validación incorrecta :) </div>";
    }
    
}
?>