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

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

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
            <h1  style="color: black;">Enviados</h1>
                
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
                            <th>Entrega</th>
                                                        
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
                           
                    </tfoot>
                <tbody>
                    <?php
        $sentencia = $pdo->prepare("SELECT * FROM ventas where estado = 2");
        $sentencia -> execute();
        $listaventas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listaventas as $venta) {  ?>
                    <tr>

                            <td><?php echo $venta['id'] ?></td>
                            <td><?php echo $venta['subtotal'] ?></td>
                            <td><?php echo $venta['total'] ?></td>
                            <td><?php echo $venta['estado'] ?></td>
                            <td><?php echo $venta['fecha'] ?></td>
                            <td><?php echo $venta['envio'] ?></td>
                            <td><?php echo $venta['usuarios_id'] ?></td>
                            <td>
                            <form action="estadoventapago.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $venta['id'] ?>">
                            <button class="btn btn-warning"  type="submit">Pagado</button>
                            </form>
                            </td>
                            <td>
                             <form action="estadoventaenvio.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $venta['id'] ?>">
                            <button class="btn btn-info"  type="submit">Enviado</button>
                            </form>
                            </td>
                            <td>
                            <form action="estadoventaentrega.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $venta['id'] ?>">
                            <button class="btn btn-success"  type="submit">Entregado</button>
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