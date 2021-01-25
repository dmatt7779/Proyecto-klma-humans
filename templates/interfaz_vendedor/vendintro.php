<?php
session_start();
include "../../global/conexion.php";

if (!isset($_SESSION['correo'])) {
         
    header("location:../login/login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">

</head>
<body>
<?php include "../navbar_footer/header.php";?>

    <!-- Black Section -->
        <div class="introcontainer">
            <div class="introtext mb-4">
                <p>RECUERDA SIEMPRE <br> QUE TU VIDA ES MÁS IMPORTANTE QUE TUS MIEDOS <br> QUE TUS FUERZAS SON MÁS GRANDES QUE TUS DUDAS <br> QUE AUNQUE TU MENTE ESTE CONFUNDIDA TU CORAZÓN SIEMPRE SABRÁ LA RESPUESTA<br> CON EL TIEMPO LO QUE HOY ES DIFÍCIL MAÑANA SERÁ UN TESORO <br> PELEA POR LO QUE REALMENTE TE LLENA EL ALMA <br> Y TEN LA VIRTUD DE SABER ESPERAR <br> TODO LO QUE TIENE QUE SER SERÁ </p>
            </div>
            
            <div class="introline mb-4">
                <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
            </div>

            <div class="introline">
                <a href="#">CERRAR SESIÓN</a>
            </div>
        </div>

        <div class="operationsec">
            <div class="operationbtn">
                <button onclick="window.location.href='ventasvend.php';" class="btn btn-submit">VENTAS</button>
                
                <button onclick="window.location.href='vendstock.php';" class="btn btn-submit">STOCK</button>
            </div>
        </div>



    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>