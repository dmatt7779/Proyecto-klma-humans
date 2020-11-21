<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas KLMA HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

    <div class="mt-5">
        <div class="login-form mb-4">
            <form action="">
                <div class="col col-xl-12  col-lg-12 col-md-12 form"></div>
                <input type="text" class="login-email" placeholder="CORREO ELECTRÓNICO"><br>
                <div class="divojitos">
                <input id="txtPassword" type="password" class="login-pass" placeholder="CONTRASEÑA">
                <span id="show_password" onclick="mostrarPassword()" class="btn btn-link btn-sm fas fa-eye icon"></span>
                <span id="show_password" onclick="mostrarPassword()" class="btn btn-link btn-sm fas fa-eye icon"></span>
                </div>
        </div>

        <div class="newdata">
            <input type="text"   class="newprofile" placeholder="NOMBRE COMPLETO">
            <input type="text" class="newprofile" placeholder="CÉDULA">
        </div>

        <div class="newdata">
            <i class="fas fa-angle-left m-3"></i><input type="text" class="newprofile" placeholder="ROL"><i class="fas fa-angle-right m-3"></i>
        </div>

        <div class="introline2 mt-2">
            <img src="../assets/img/interfaces/admin/Línea Principal.png" alt="Linea gradient">
        </div>

            <div class="btn-newprofile mt-2">
                <button class="btn btn-submit">AGREGAR</button>
            </div> 

            <!-- DIV PARA EL DATATABLE -->
        <div>
            <div class="tableadmin">
                AQUI VA LA TABLA
            </div>
        </div><!-- FIN DIV PARA EL DATATABLE -->
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    
</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>