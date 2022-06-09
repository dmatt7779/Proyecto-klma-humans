<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
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

    if($response['success'] && ($response['score'] && $response['score'] > 0.5)){
        $usuario = $_POST['nickname']; 
        $contrasena = $_POST['contrasena'];
        $correo = $_POST['correo'];
        $hoy = date('Y-m-d');
        $fecha_registro =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");

        $consultaSql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $sentencia1 = $pdo->prepare( $consultaSql );
        $sentencia1 -> execute();
        $alreadyExist = $sentencia1->fetchAll(PDO::FETCH_ASSOC);

        $hash = password_hash($contrasena, PASSWORD_DEFAULT, $opciones);

        if(!(count($alreadyExist) != 0)) {
            $sql = "INSERT INTO usuarios (apodo, correo, clave, rol, fecha_registro) VALUES ('$usuario', '$correo', '$hash', '3','$fecha_registro')";
    
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
            $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
                <script>
                    var r = alert("Hemos registrado el email.");
                </script>
            <?php

            $sentencia = $pdo->prepare("SELECT correo, apodo, id, rol FROM usuarios where correo= :correo");
            $sentencia -> execute(array(":correo"=>$correo));   
            $registro=$sentencia->fetch(PDO::FETCH_ASSOC);
            
            $_SESSION = $registro;
            $_SESSION['correo']   = $registro['correo'];   
            $_SESSION['apodo']   = $registro['apodo'];   
            $_SESSION['iduser']   = $registro['id'];   
            $_SESSION['rol'] = $registro['rol'];

                 switch ($registro['rol']) {
                    case '3':
                        //print_r($_SESSION);
                        header("location:../interfaz_cliente/clienteintro.php");
                        break;
                    case '2':
                        header("location:../interfaz_vendedor/vendintro.php");
                        break;
                    case '1':
                        header("location:../interfaz_admin/adminintro.php");
                        break;
                    default:
                        echo '<script language="javascript">alert("Email sin ROL");</script>';
                        break;
                } 
    }else {
            if( !$register ){
                $_SESSION['creado'] = 1;
            }
            ?>
                <script>
                    var r = alert("Ya existe el email ingresado.");
                    //window.location.href = "registro.php";
                </script>
            <?php
        } 
    }else {
        echo "<div class='alert alert-warning'> Validación incorrecta :) </div>";
    }
}
?>