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
  <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

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

        <form action="restablecer.php" class="login-form" method="POST">
            
            <div class="logpass">
                <input type="email" name="email" class="login-email" placeholder="CORREO ELECTRÓNICO">
            </div>
                
            <div class="contentlogoform mt-4 mb-4">
                <div class="img-barras"></div>
            </div>

            <div class="recoverypwd">
                <button class="btn btn-submit" type="submit">RECUPERAR</button>  
            </div>
        </form>

        <div class="sign-up text-center">
            <a href="login.php">REGRESAR</a>
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