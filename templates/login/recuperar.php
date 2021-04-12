<?php
session_start();
include "../../global/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klma Humans</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body>
<?php include "../navbar_footer/header.php";?>

    <div class="container-fluid contentlogin">
        <div class="contentlogoform">
                <div class="img-form"></div>
        </div>

        <form action="enviar.php" class="login-form" method="POST">
            
            <div class="logpass"></div>
                <input type="text" name="apodo" class="login-email" placeholder="APODO">
            </div>
                
            <div class="contentlogoform mt-4 mb-4">
                <div class="img-barras"></div>
            </div>

            <button class="btn btn-submit" type="submit">sub</button>  

        </form>

        <div class="sign-up text-center">
            <a href="login.php">REGRESAR</a>
            <?php session_start(); if (isset($_SESSION['correo'])) { ?>
            <p>se ha enviado un correo de recuperacion a: <?php echo $_SESSION['correo'];?></p>
            <?php  }  ?>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

</body>
</html>

<?php include "../navbar_footer/scd_footer.php"  ?>