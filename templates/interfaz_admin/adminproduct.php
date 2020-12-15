<?php
session_start();
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
        <form action="agregar.php" method="post" enctype="multipart/form-data">
        <div class="newdata">
            <input type="text" name="codigo" class="newprofile" placeholder="REFERENCIA">
            <input type="text" name="nombre" class="newprofile" placeholder="NOMBRE">
            <input type="text" name="tipologia" class="newprofile" placeholder="UNIDAD NEQ">
            <input type="text" name="precio_venta" class="newprofile" placeholder="PRECIO VEN">
            <input type="text" name="precio_compra" class="newprofile" placeholder="PRECIO PROD">
            <input type="text" name="cantidad" class="newprofile" placeholder="STOCK">
            <input type="text" name="historia" class="newprofile" placeholder="HISTORIA">
            <input type="text" name="descripcion" class="newprofile" placeholder="DESCRIPCION">
            <input type="text" name="genero" class="newprofile" placeholder="GENERO">
            <input type="file" name="imagen" class="newprofile" placeholder="IMAGEN" required>
            <input type="text" name="emocion" class="newprofile" placeholder="EMOCION">
        </div>

        <div class="btn-newprofile mt-2">
            <button type="submit" class="btn btn-submit">AGREGAR</button>
        </div> 
        </form>
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