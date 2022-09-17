<?php
session_start();
include "../../global/conexion.php";
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
    <!-- <link rel="stylesheet" href="../assets/style/style.css"> -->
    <link rel="stylesheet" href="../assets/style/style.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>KLMA HUMANS - Registro</title>
</head>
<body>
<section>
    <div class="text-center">
        <div class="stateTransactionImg"><img src="../assets/img/nav_foot/Logo.png" alt=""></div>
    </div>
    <div class="footerbg text-center">
        <div id="footerbg2"></div>
    </div>

    <div id="mainfooter">
        <div class="stateTransaction">
            <div class="titleSucessfullRegister">    
                <h1>REGISTRO EXITOSO</h1>
            </div>
            <div class="textStateTransaction">
                TU REGISTRO HA SIDO EXITOSO, TE INVITAMOS A QUE INGRESES CON TU USUARIO Y CONTRASEÑA EN EL SIGUIENTE BOTÓN.
            </div>
            <div class="thanksCustom">    
               MUCHAS GRACIAS
            </div>
            <div class="backStateTrans">    
            <a href="../login/login.php"><button class="btn btnBackLogin">LOGIN</button></a>
            </div>
            <hr class="footerhr3">
        </div>
    </div>
    
    <div class="footer-responsive">
        <div class="beigeLine"></div>
    </div>

</section>
</body>
</html>