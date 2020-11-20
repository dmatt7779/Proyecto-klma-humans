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
    <title>Contacto - KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <?php include "../navbar_footer/header.php";?>

    <div class="contactcontainer">
        <div class="contacttitle">
            <h1>CONTACTO</h1>
            <!-- ALERTS de validaciones -->
            <div class="alert alert-success d-none" id="success">MENSAJE ENVIADO CON ÉXITO</div>
            <div class="alert alert-danger d-none" id="bad"></div>

            <form id="form" class="contactform" method="POST" novalidate>
                
                <input type="text" name="nombre" value="" id="nombre" class="mt-3 mb-3" placeholder="NOMBRE" required>

                <input type="email" name="email" value="" id="email" class="mt-3 mb-3" placeholder="CORREO ELECTRÓNICO" required>

                <textarea rows="4" name="mensaje" value="" id="mensaje" class="mt-3 mb-3" placeholder="MENSAJE" required></textarea>
                <div class="btnformcontact"><button class="btn btnnews" type="submit">ENVIAR</button></div>
            </form>
        </div>
    </div>

    
    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../assets/js/contactform.js"></script>
</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>