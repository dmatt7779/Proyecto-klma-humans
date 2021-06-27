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

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>PEDIDO APROBADO</title>
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
            <div class="titleTransaction">    
                <h1>APROBADO</h1>
            </div>
            <div class="owner">    
                <h2>JHONHOB</h2>
            </div>
            <div class="textStateTransaction">    
                EN NOMBRE DE KLMA HUMANS QUEREMOS AGRADECERTE INMENSAMENTE POR LA CONFIANZA DEPOSITADA EN NUESTROS PRODUCTOS. ESPERAMOS QUE ESTES SUPER EMOCIONADO CON TU COMPRA TAL COMO LO ESTAMOS NOSOTROS.<br><br>
                DESEAMOS QUE EL MISMO SUPERE TUS ESPECTATIVAS.
            </div>
            <div class="thanksCustom">    
               MUCHAS GRACIAS
            </div>
            <div class="backStateTrans">    
               <button class="btn btnBack"><a href="../interfaz_cliente/clienteintro.php">VOLVER</a></button>
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