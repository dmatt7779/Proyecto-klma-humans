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
        if($correo != ''){
            $res = filter_var($correo, FILTER_VALIDATE_EMAIL);
            if(!$res){
                echo "<script>
                alert('Formato de correo invalido');
                window.location.href='registro.php';
                </script>";
            }
        }
                if ($correo == '') { 
                echo "<script>
                alert('Email no puede estar vacío');
                window.location.href='registro.php';
                </script>";
                    }else if($contrasena == ''){
                        echo "<script>
                alert('Contraseña no puede estar vacía');
                window.location.href='registro.php';
                </script>";
                    }else if($usuario == ''){
                        echo "<script>
                alert('Nickname no puede estar vacía');
                window.location.href='registro.php';
                </script>";
                }
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
                    window.location.href = "registro_exitoso.php";
                </script>
            <?php
        }else {
            if( !$register ){
                $_SESSION['creado'] = 1;
                ?>
                <script>
                    alert("Ya existe el email ingresado.");
                    window.location.href = "registro.php";
                </script>
            <?php
            }
        } 
    }else {
        echo "<div class='alert alert-warning'> Validación incorrecta, intentalo nuevamente, gracias </div>";
        ?>
        <script>
            window.location.href = "registro_fallido.php";
        </script>
    <?php
    }
}
?>