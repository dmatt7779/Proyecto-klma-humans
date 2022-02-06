<?php

    include "../../global/conexion.php";

    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuario = $_SESSION['correo'];

    if ($email == '') {
        header("location:login.php");
    }else if($password == ''){
        header("location:login.php");
    }else if ($email !== $registro['correo']) {
        echo '<script language="javascript">alert("Email o contraseña incorrectos"); window.location.href = "login.php";</script>';
        //header("location:login.php");
    }
?>
<?php

    $sentencia = $pdo->prepare("SELECT * FROM usuarios where correo= :email");
    $sentencia -> execute(array(":email"=>$email));

    while($registro=$sentencia->fetch(PDO::FETCH_ASSOC)){

        if( password_verify ( $password, $registro['clave'] ) ){
            $_SESSION['correo']   = $registro['correo'];   
            $_SESSION['apodo']   = $registro['apodo'];   
            $_SESSION['iduser']   = $registro['id'];   
            $_SESSION['rol'] = $registro['rol'];

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
                    echo '<script language="javascript">alert("Email sin ROL");</script>';
                    break;
            }
        }else {
            header("location:login.php");
        }
    }
?>


