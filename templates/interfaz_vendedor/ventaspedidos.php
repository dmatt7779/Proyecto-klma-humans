<?php
session_start();
include('../../global/conexion.php');
$idventa = $_GET['ventaid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos KLMA' HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

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
        $sentencia->execute();
        $detalleventa = $sentencia->fetchAll(PDO::FETCH_ASSOC);
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

    <?php

    $sentencia = $pdo->prepare("SELECT usuarios_id FROM ventas where id = $idventa");
    $sentencia->execute();
    $venta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    $iduser = $venta[0]['usuarios_id'];

    $sentencia = $pdo->prepare("SELECT * FROM Direcciones where id_user = $iduser");
    $sentencia->execute();
    $direcciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    if($direcciones[0]['pagaenvio'] == "false"){
        $pagaenvio = "No";
    }else{
        $pagaenvio = "Si";
    }

    if($direcciones[0]['contraentrega'] == "false"){
        $contraentrega = "No";
    }else{
        $contraentrega = "Si";
    }

    ?>
    <div class="jumbotrontable">

        <div class="container-fluid">
            <!-- DIV PARA EL DATATABLE -->
            <!--         <div class="tableadmin"> -->
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Dep-Local</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Provincia</th>
                        <th>Barrio</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>ContraEntrega</th>
                        <th>PagaEnvío</th>
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
                </tfoot>
                <tbody>
                    <?php foreach ($direcciones as $direccion) {  ?>
                        <tr>

                            <td><?php echo $direccion['nombre'] ?></td>
                            <td><?php echo $direccion['apellido'] ?></td>
                            <td><?php echo $direccion['direccion'] ?></td>
                            <td><?php echo $direccion['dep-local'] ?></td>
                            <td><?php echo $direccion['ciudad'] ?></td>
                            <td><?php echo $direccion['pais'] ?></td>
                            <td><?php echo $direccion['provincia'] ?></td>
                            <td><?php echo $direccion['barrio'] ?></td>
                            <td><?php echo $direccion['telefono'] ?></td>
                            <td><?php echo $direccion['correo'] ?></td>
                            <td><?php echo $contraentrega ?></td>
                            <td><?php echo $pagaenvio ?></td>                            
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