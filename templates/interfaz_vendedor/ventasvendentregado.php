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
    <title>Ventas KLMA' HUMANS</title>
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

    <!-- Beige Section -->
    <div class="containerbeige">


        <div class="btnsales mt-4 mb-4">
            <button onclick="location.href='../interfaz_vendedor/ventasvend.php'" class="btn btn-submit">RECIBIDOS</button>
            <button onclick="location.href='../interfaz_vendedor/ventasvendenviado.php'" class="btn btn-submit ml-4 mr-4">ENVIADOS</button>
            <button onclick="location.href='../interfaz_vendedor/ventasvendentregado.php'" class="btn btn-submit">ENTREGADOS</button>
        </div>

        <div class="introline mb-4 mt-4">
            <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
        </div>
        <div class="introline mb-4 mt-4">
            <h1 style="color: black;">Entregados</h1>
        </div>
    </div>

    <div class="operationsec">
        <div class="operationbtn">


            <div class="jumbotrontable">
                <div class="container-fluid">
                    <!-- DIV PARA EL DATATABLE -->
                    <!--         <div class="tableadmin"> -->
                    <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Subtotal</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Envío</th>
                                <th>id usuario</th>
                                <th>Pago</th>
                                <th>Envio</th>
                                <th>Productos</th>

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

                        </tfoot>
                        <tbody>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM ventas where estado = 3");
                            $sentencia->execute();
                            $listaventas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>

                            <?php foreach ($listaventas as $venta) {  ?>
                                <tr>

                                    <td><?php echo $venta['id'] ?></td>
                                    <td>$<?php echo number_format($venta['subtotal']) ?></td>
                            <td>$<?php echo number_format($venta['total']) ?></td>
                                    <td><?php switch ($venta['estado']) {
                                            case '1':

                                                echo 'Pagado';
                                                break;
                                            case '2':
                                                echo 'Enviado';
                                                break;
                                            case '3':
                                                echo 'Entregado';
                                                break;

                                            default:
                                                break;
                                        } ?></td>
                                    <td><?php echo $venta['fecha'] ?></td>
                                    <td><?php echo $venta['envio'] ?></td>
                                    <td><?php echo $venta['usuarios_id'] ?></td>
                                    <td>
                                        <form action="estadoventapago.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo $venta['id'] ?>">
                                            <button class="btn" onclick="myconfirmpag(event)" type="submit"><i class="fas fa-shopping-bag"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="estadoventaenvio.php" method="get">
                                            <input type="hidden" name="id" value="<?php echo $venta['id'] ?>">
                                            <button class="btn" onclick="myconfirmenv(event)" type="submit"><i class="fas fa-box-open"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="ventaspedidos.php" method="get" class="text-center">
                                            <input type="hidden" name="ventaid" value="<?php echo $venta['id'] ?>">
                                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table><!-- FIN DIV PARA EL DATATABLE -->
                </div>
            </div>
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