<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - KLMA' HUMANS</title>
</head>
<body>

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
    <script src="../assets/js/contactform.js"></script>
</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>