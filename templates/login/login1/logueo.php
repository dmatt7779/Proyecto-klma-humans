<?php


include "../../../global/config.php";
include "../../../global/conexion.php";

session_start();
$email = $_POST['email'];
$password = $_POST['password'];



$sentencia = $pdo->prepare("SELECT * FROM usuarios where correo = '$email' and clave = '$password'");
$sentencia -> execute();

$usuario=$sentencia->fetchAll(PDO::FETCH_ASSOC);




if (empty($usuario)) {
    
    echo "pailander";
    header('location:login.php');

    
} else {
    echo "te logueaste mi chan";



    $_SESSION['correo']   = $usuario[0]['correo'];   
    $_SESSION['apodo']   = $usuario[0]['apodo'];   
    $_SESSION['iduser']   = $usuario[0]['id'];   

    
    header('location:../../Rejillas_generales/loungewear.php');

}


// <?php echo $usuario[0]['id'];?>


