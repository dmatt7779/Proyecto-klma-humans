<?php
session_start();
include "../../global/conexion.php";

if (!isset($_SESSION['correo'])) {
         
    header("location:../login/login.php");

}

$correo = $_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario KLMA' HUMANS</title>

    <!-- CSS only -->
   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
</head>

<body>
<?php include "../navbar_footer/header.php";?>

    <!-- Beige Section -->
    <div class="containerbeige">
        <div class="usercounts">
            HOLA <?php echo $_SESSION['apodo'];?>
        </div>

        <div class="introlineclient mt-4">
            <a href="../login/salir.php">CERRAR SESIÓN</a>
        </div>

        <div class="mt-3 mb-2">
        <form action="suscripcion.php" method="post">
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
            <button onclick="myconfirmsus(event)" class="btn btn-submit">SUSCRIBIRME</button>

        </form>
        </div> 

        <div class="cancelsub">
        <form action="desuscripcion.php" method="post" name="desuscribirse">
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">

        </form>
            <a href="#" onclick="document.desuscribirse.submit()">CANCELAR SUSCRIPCIÓN</a>
        </div>
        
        <div class="introlineclient mt-4">
            <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
        </div>
    </div>

    <!-- AQUI VA LA TABLA -->
    <div class="operationsec">
        <div class="operationbtn">
        
<div class="jumbotrontableclient">
    <div class="container-fluid">
    <!-- DIV PARA EL DATATABLE -->
<!--         <div class="tableadmin"> -->
            <table class="dataTableclient records_list table-striped table-bordered table-hover" id="mydatatable">
                    <thead class="tableTheadClient">
                        <tr>
                            <th>id</th>
                            <th>Subtotal</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Envío</th>                           
                        </tr>
                    </thead>
                   
                <tbody>
                    <?php
                    $idses = $_SESSION['iduser'];
        $sentencia = $pdo->prepare("SELECT * FROM ventas where estado != 0 and usuarios_id = '$idses'");
        $sentencia -> execute();
        $listaventas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listaventas as $venta) {  ?>
                    <tr style="background-color: black;">

                            <td><?php echo $venta['id'] ?></td>
                            <td><?php echo $venta['subtotal'] ?></td>
                            <td><?php echo $venta['total'] ?></td>
                            <td><?php switch($venta['estado']){
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

                            }?></td>
                            <td><?php echo $venta['fecha'] ?></td>
                            <td><?php echo $venta['envio'] ?></td>
                            
                           
                         
                        
                    </tr>
                    <?php } ?>                  
                </tbody>
            </table><!-- FIN DIV PARA EL DATATABLE -->
    </div>
</div>
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

    <!-- INICIO Footer -->
<footer id="clientfooter" class="footer-content">
    <div class="footercontent">
        <div class="footerleft">
            <img src="../assets/img/nav_foot/sonido-activo.png" alt="">
        </div>

        <div class="footerright">
            <a href="https://api.whatsapp.com/send?phone=+573007106853" target="_blank"><img src="../assets/img/nav_foot/Contactenos.png" alt="logo de contacto"></a>
        </div>
    </div>
</footer>
<!-- FIN Footer -->
    
</body>
</html>