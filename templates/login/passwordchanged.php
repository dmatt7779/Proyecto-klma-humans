<?php 
    include "../../global/conexion.php";
    $email =$_POST['email'];
    $newpwd =$_POST['newpwd'];
    $confpwd =$_POST['confpwd'];
    if($newpwd == $confpwd){
/*         $newpwd=sha1($newpwd); */
        $sentencia = $pdo->prepare("UPDATE usuarios SET clave='$newpwd' WHERE correo='$email'");
        $sentencia->execute();
        header("Location: login.php");
        
    }else{
        echo "no coinciden";
    }
?>