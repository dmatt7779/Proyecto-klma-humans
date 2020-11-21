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
    <title>PRODUCTOS KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

    <div class="mt-5">

        <div class="newdata">
            <input type="text" class="newprofile" placeholder="REFERENCIA">
            <input type="text" class="newprofile" placeholder="NOMBRE">
            <input type="text" class="newprofile" placeholder="UNIDAD NEQ">
            <input type="text" class="newprofile" placeholder="PRECIO VEN">
            <input type="text" class="newprofile" placeholder="PRECIO PROD">
            <input type="text" class="newprofile" placeholder="STOCK">
            <input type="text" class="newprofile" placeholder="FECHA INGR">
            <input type="text" class="newprofile" placeholder="EMOCIÓN">
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