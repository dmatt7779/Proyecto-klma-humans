<?php
session_start();
include "../../global/conexion.php";

if ($_SESSION['apodo'] == '') {
         
    header("location:../login/login.php");

}

$correo = $_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome KLMA' HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

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
            BIENVENIDO <?php echo strtoupper($_SESSION['apodo']);?>,
        </div>
        <div class="usercounts">
            COMO BUEN AMIGO, ME ALEGRA INMENSAMENTE VERTE DE NUEVO. Y ESTOY MÁS QUE LISTO PARA EXPLORAR JUNTOS TU UNIVERSO DE EMOCIONES. RECUERDA QUE ESTE ESPACIO ES TUYO, QUE ERES LIBRE DE SENTIR, EXPRESAR Y CREAR TODO LO QUE DESEES.
        </div>
        <div class="usercounts">
            ACÁ ESTARÉ POR SI ME NECESITAS.
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
            <table class="dataTableclient records_list table-striped table-borderedClient" id="mydatatable">
                    <thead class="tableTheadClient">
                        <tr class="titleTableCLiente">
                            <th>ID</th>
                            <th>SUBTOTAL</th>
                            <th>TOTAL</th>
                            <th>ESTADO</th>
                            <th>FECHA</th>
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
                    <tr class="trTableClient">

                            <td><?php echo $venta['id'] ?></td>
                            <td>$<?php echo number_format($venta['subtotal']) ?></td>
                            <td>$<?php echo number_format($venta['total']) ?></td>
                            <td><?php switch($venta['estado']){
                                case '1':
                                    
                                    echo 'PAGADO';
                                    break;
                                case '2':
                                    echo 'ENVIADO';
                                    break;
                                case '3':
                                    echo 'ENTREGADO';
                                    break;
                              
                                default:
                                    break;

                            }?></td>
                            <td><?php echo $venta['fecha'] ?></td>
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

<!-- Funcion para eliminar elementos del DOM -->
<script>
    document.ready = function(){
            imagen = document.getElementById(mydatatable_info);
            console.log (imagen.children.length);

            if (!imagen){
                 console.log("El elemento selecionado existe");
            }

            // if (!imagen){
            //     alert("El elemento selecionado no existe");
            // } else {
            //     padre = imagen.parentNode;
            //     padre.removeChild(imagen);
            // }
    }
</script>
    
</body>
</html>