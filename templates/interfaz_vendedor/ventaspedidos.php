<?php
    session_start(); 
    include ('../../global/conexion.php');
    $idventa = $_GET['ventaid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<?php include "../navbar_footer/header.php"; ?>
<div>
<?php
        $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.talla, detalleventa.genero, detalleventa.manga, productos.codigo from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $idventa");
        $sentencia -> execute();
        $detalleventa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
        <div class="jumbotrontable">

        <div class="container-fluid">
            <!-- DIV PARA EL DATATABLE -->
            <!--         <div class="tableadmin"> -->
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Referencia</th>
                        <th>Talla</th>
                        <th>Genero</th>
                        <th>Manga</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                </tfoot>
                <tbody>
                    <?php foreach ($detalleventa as $venta) {  ?>
                        <tr>

                            <td><?php echo $venta['cantidad'] ?></td>
                            <td><?php echo $venta['codigo'] ?></td>
                            <td><?php echo $venta['talla'] ?></td>
                            <td><?php echo $venta['genero'] ?></td>
                            <td><?php echo $venta['manga'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table><!-- FIN DIV PARA EL DATATABLE -->
        </div>
    </div>

</div>

<script src="../assets/js/my.js"></script>

<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
<script src="../assets/librerias/popper.min.js"></script>
<script src="../assets/librerias/bootstrap.min.js"></script>

<!-- Datatables -->
<script src="../assets/librerias/datatables.min.js"></script>
<script src="../assets/js/mydatatable.js"></script>
</body>



