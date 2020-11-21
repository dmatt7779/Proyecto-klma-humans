<?php
session_start();
include "../../global/config.php";
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>
<?php include "../navbar_footer/header.php";?>

    <!-- Beige Section -->
    <div class="containerbeige">
        <div class="usercounts">
            HOLA <?php echo $_SESSION['apodo'];?>
        </div>

        <div class="introlineclient mt-4">
            <a href="../login/salir.php">CERRAR SESIÓN</a>
        </div>

        <div class="mt-3 mb-2">
            <button class="btn btn-submit">SUSCRIBIRME</button>
        </div> 

        <div class="cancelsub">
            <a href="#">CANCELAR SUSCRIPCIÓN</a>
        </div>
        
        <div class="introlineclient mt-4">
            <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
        </div>
    </div>

    <!-- AQUI VA LA TABLA -->
    <div class="operationsec">
        <div class="operationbtn">
            <span style="font-weight: bolder; font-size: 30pt;">AQUI VA LA TABLA</span>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    
</body>
</html>
