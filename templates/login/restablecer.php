<?php 
    session_start();
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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Recuperar Contraseña KLMA' HUMANS</title>
</head>
<body>
<section>
<!-- Image -->
    <div class="text-center">
        <div class="stateTransactionImg"><img src="../assets/img/nav_foot/Logo.png" alt=""></div>
    </div>
    <div class="footerbg text-center">
        <div id="footerbg2"></div>
    </div>

<!-- Black Container -->
    <div id="mainfooter">
        <div class="stateTransaction">
            <div class="recoverypwd2">    
                CORREO DE RECUPERACIÓN DE CONTRASEÑA ENVIADO
            </div>
            <div class="owner"> <!-- Nick name del usuario traerlo de la BD -->
                <h2><?php echo $email ?><br><br></h2>
            </div>
            <div class="textStateTransaction">    
                SE ENVIÓ UN MENSAJE A TU CORREO ELECTRÓNICO<br>
                <div class="recoveryPrintEmail">
                    <?php echo $email ?><br><br>
                </div>
                TE INVITAMOS A SEGUIR LAS INSTRUCCIONES DEL MENSAJE<br>
                PARA RESTABLECER TU CONTRASEÑA.
            </div>
            <div class="thanksCustom">    
               MUCHAS GRACIAS
            </div>
            <div class="backStateTrans">
               <button class="btn recoveryPwdBtn"><a target="_blank" href="https://mail.google.com/mail/u/0/?tab=wm#inbox">ACEPTAR</a></button>
            </div>
            <hr class="footerhr3">
        </div>
    </div>
    
    <div class="footer-content">
        <div class="beigeLine"></div>
    </div>

</section>
</body>
</html>