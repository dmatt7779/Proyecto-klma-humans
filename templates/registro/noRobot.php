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
    <title>Registro KLMA HUMAN'S</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    <?php require "../navbar_footer/header.php"; ?>

    <div class="noRobot row justify-content-center align-items-center">
        <form action="?" method="POST">
            <div class="captchaClass g-recaptcha" data-sitekey="6LcHBW8aAAAAAB-vwrkT0MIZGIPsP4KLlDiJpSC6"></div>
            <br/>
            <div class="mb-4">
                    <div class="img-barras"></div>
                </div>
            <input class="btn btn-submit" type="submit" value="ENVIAR">
        </form>
    </div>

        <!-- JS, Popper.js, and jQuery -->
        <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
        <script src="../assets/librerias/popper.min.js"></script>
        <script src="../assets/librerias/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>

<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
</script>

</body>
</html>