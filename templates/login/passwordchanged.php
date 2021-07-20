<?php 
    include "../../global/conexion.php";
    $email =$_POST['email'];
    $newpwd =$_POST['newpwd'];
    $confpwd =$_POST['confpwd'];

    $opciones = [
        'cost' => 12,
    ];

    if($newpwd == $confpwd){
/*         $newpwd=sha1($newpwd); */
        $hash = password_hash($newpwd, PASSWORD_DEFAULT, $opciones);
        $sentencia = $pdo->prepare("UPDATE usuarios SET clave='$hash' WHERE correo='$email'");
        $sentencia->execute();
        header("Location: login.php");
        
    }else{
        echo "no coinciden";
    }
?>