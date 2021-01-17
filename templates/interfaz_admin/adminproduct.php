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
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">



     
        <script src="../assets/js/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

        <!-- Datatables -->
        <link rel="stylesheet" href="../assets/style/datatables.min.css">
        <script src="../assets/js/datatables.min.js"></script>   
        
     
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
            </table>
            
                <link rel="stylesheet" href="../assets/style/mydatatable.css">
                <script src="../assets/js/mydatatable.js"></script>
            </div>
        </div><!-- FIN DIV PARA EL DATATABLE -->
    </div>


    <!-- JS, Popper.js, and jQuery -->

</body>
</html>

