<?php

    include "../../global/conexion.php";

    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '') { 
        echo "<script>
alert('Email no puede estar vacío');
window.location.href='login.php';
</script>";
    }else if($password == ''){
        echo "<script>
alert('Contraseña no puede estar vacía');
window.location.href='login.php';
</script>";
    }
$sentencia = $pdo->prepare("SELECT * FROM usuarios where correo= :email");
$sentencia -> execute(array(":email"=>$email));

// while($registro=$sentencia->fetch(PDO::FETCH_ASSOC)){
    $registro=$sentencia->fetch(PDO::FETCH_ASSOC);
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

            echo "<script>
            alert('Contraseña incorrecta');
            window.location.href='login.php';
            </script>";                
        }
    // }
?>