<?php

include "../../global/conexion.php";

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$usuario = $_SESSION['correo'];

if ($email == '') {
    
    header("location:../login/login.php");
}

?>
<script>
    debugger;
    console.log('<?php echo $usuario ?>')
</script>
<?php



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
    $_SESSION['rol'] = $usuario[0]['rol'];
    

    switch ($_SESSION['rol']) {
        case '3':
            header("location:../interfaz_cliente/clienteintro.php");
            break;
        case '2':
            header("location:../interfaz_vendedor/vendintro.php");
            break;
        case '1':
            header("location:../interfaz_admin/adminintro.php");
            break;
                    
            
        default:
            # code...
            break;
    }
   

}


// <?php echo $usuario[0]['id'];?>


