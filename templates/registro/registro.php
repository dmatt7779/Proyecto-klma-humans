<?php
    session_start(); if (isset($_SESSION['creado'])) { ?>
        <script type="text/javascript">
        alert("se creó el correo");
        </script> <?php 
    };

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
                <div class="img-register"></div>
        </div>

        <form class="login-form" action="guardar.php" method="POST">

            <div class="logpass">
                <input type="text" name="correo" class="login-email" placeholder="CORREO ELECTRÓNICO"><br>
                <div class="divshowhide logpassregister">
                    <input id="txtPassword" type="password" name="contrasena" class="login-pass" placeholder="CONTRASEÑA">
                    <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                </div>
            </div>

            <div class="row nickname">
                <input type="text"  name="nickname" placeholder="NICK NAME">
            </div>
            
            <div class="mt-4 mb-4">
                <div class="img-barras"></div>
            </div>

            <button class="btn btn-submit" type="submit">REGISTRARME</button>                                

            <div class="sign-up text-center">
                <a href="../login/login.php">REGRESAR</a>
            </div>
        </form>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

    <!-- Mostrar y ocultar contraseña-->
    <script type="text/javascript">
        function mostrarPassword(){
            var cambio = document.getElementById("txtPassword");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye');
            }else{
                cambio.type = "password";
                $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye');
            }
            }
    </script>

</body>
</html>

<?php include "../navbar_footer/scd_footer.php"  ?>