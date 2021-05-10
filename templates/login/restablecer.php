<?php 
    include "../../global/conexion.php";
    $email =$_POST['email'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);

    include "mail_reset.php";
    if($enviado == true){
        $sql = "INSERT INTO passwords (email, token, codigo) VALUES ('$email','$token','$codigo')";
        $sentencia = $pdo->prepare( $sql );
        $sentencia -> execute();

/*         header("location:login.php"); */

        echo '<p>Verifica tu email para restablecer tu cuenta</p>';
    }
?>