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
    <title>PRODUCTOS KLMA' HUMANS</title>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
     
</head>
<body>
<?php include "../navbar_footer/header.php";?>


<div class="jumbotrontable">
    <div class="container-fluid">
    <!-- DIV PARA EL DATATABLE -->
<!--         <div class="tableadmin"> -->
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Referencia</th>
                            <th>Nombre</th>
                            <th>id Tipologia</th>
                            <th>Precio venta</th>
                            <th>Precio compra</th>
                            <th>Cantidad</th>
                            <th>Habilitado</th>
                            <th>Fecha</th>
                            
                            <th>Descripcion</th>
                            <th>Genero</th>
                            <th>Imagen</th>
                            <th>Emocion</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                        </tr>
                    </tfoot>
                <tbody>
                    <?php
        $sentencia = $pdo->prepare("SELECT * FROM productos");
        $sentencia -> execute();
        $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listaproductos as $producto) {  ?>
                    <tr>

                            <td><?php echo $producto['id'] ?></td>
                            <td><?php echo $producto['codigo'] ?></td>
                            <td><?php echo $producto['nombre'] ?></td>
                            <td><?php echo $producto['tipologia_id'] ?></td>
                            <td><?php echo $producto['precio_venta'] ?></td>
                            <td><?php echo $producto['precio_compra'] ?></td>
                            <td><?php echo $producto['cantidad'] ?></td>
                            <td><?php echo $producto['habilitado'] ?></td>
                            <td><?php echo $producto['fecha'] ?></td>
                            
                            <td><?php echo $producto['descripcion'] ?></td>
                            <td><?php echo $producto['genero'] ?></td>
                            <td><?php echo $producto['imagen'] ?></td>
                            <td><?php echo $producto['emocion'] ?></td>
                           
                    </tr>
                    <?php } ?>                  
                </tbody>
            </table><!-- FIN DIV PARA EL DATATABLE -->
    </div>
</div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/js/my.js"></script>

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/librerias/datatables.min.js"></script>
    <script src="../assets/js/mydatatable.js"></script>

</body>
</html>

