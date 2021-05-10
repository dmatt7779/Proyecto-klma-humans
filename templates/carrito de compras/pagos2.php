<?php
session_start();
include "../../global/conexion.php";

if (!isset($_SESSION['correo'])) {

    header("location:../login/login.php");
}


$iduser = $_SESSION['iduser'];
$sentencia = $pdo->prepare("SELECT subtotal FROM ventas where usuarios_id = $iduser and estado = 0");
$sentencia->execute();
$venta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$total =  100 * (floatval($venta[0]['subtotal']));
$total2 =  floatval($venta[0]['subtotal']);

$ref = $_SESSION['apodo'] . "-" . (string)(rand(0, 1000000000000));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos 2 KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body id="pagos1">
    <?php include "../navbar_footer/dark_header.php"; ?>

    <div class="containersale2 mt-5">
        <div class="mb-1">
            <div class="steps">CARRITO <i class="fas fa-angle-right m-3"></i> INFORMACI&Oacute;N <i class="fas fa-angle-right m-3"></i> ENV&Iacute;O <i class="fas fa-angle-right m-3"></i> PAGO</div>
        </div>

        <div class="datachance mb-5">
            <div class="minichance">
                <span>CONTACTO</span>
                <button class="btnminichance" data-toggle="modal" data-target="#exampleModal">CAMBIAR</button>
            </div>
            <hr>
            <div class="minichance">
                <span>ENVIAR A</span>
                <button class="btnminichance" data-toggle="modal" data-target="#exampleModal1">CAMBIAR</button>
            </div>

        </div>
        <!-- Button trigger modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Escriba el nuevo nombre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="changenombre.php" name="name" method="post">
                            <input type="text" name="nombre">
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="document.name.submit()" class="btn btn-primary">Cambiar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Escriba el nuevo telefono</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="changedireccion.php" name="telefono" method="post">
                            <input type="text" name="telefono">
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="entre()" class="btn btn-primary">Cambiar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div>
            <span class="payinfo2">ENV&Iacute;OS</span>
        </div>

        <div class="datachance mt-3 mb-4">
            <div class="minichance">
                <label><input type="radio" id="cbox1" value="checkboxsale"></label>
                <span class="checkboxship">ENV&Iacute;O EST&Aacute;NDAR</span>
                <span style="font-size: 10pt; letter-spacing: .5rem;">$90.000</span>
            </div>
        </div>
        <!-- Sección para pasar a pagos -->
        <div>
            <div class="datapay">
                
                <!-- wompi -->
                <form action="https://checkout.wompi.co/p/" method="GET">
                    <!-- OBLIGATORIOS -->
                    <input type="hidden" name="public-key" value="pub_test_Y6nrs8xkNGx5ZhKW06oZX51bFt3ISh7A" />
                    <input type="hidden" name="currency" value="COP" />
                    <input type="hidden" name="amount-in-cents" value="<?php echo $total ?>" />
                    <input type="hidden" name="reference" value="<?php echo $ref ?>" />
                    <!-- OPCIONALES -->
                    <input type="hidden" name="redirect-url" value="http://klmahumans.com/templates/carrito%20de%20compras/pagado.php" />
                    <button type="submit">Pagar con Wompi</button>
                </form>
                <!-- wompi -->
            </div>
        </div>


        <!-- INICIO configuración pasarela de pagos 1 -->
        <div class="">
            <div class="pay">
                <!-- Contenedor de objetos para el carrito de compras -->
                <div class="cart-content">
                    <!-- Cart items -->

                    <!-- aqui va lo que pruebo -->
                    <?php

                    $iduser = $_SESSION['iduser'];
                    $sentencia = $pdo->prepare("SELECT id FROM ventas where usuarios_id = $iduser and estado = 0");
                    $sentencia->execute();
                    $venta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

                    $ventaid =  $venta[0]['id'];
                    $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
                    $sentencia->execute();
                    $detalleventa = $sentencia->fetchAll(PDO::FETCH_ASSOC);


                    $subtotal = 0;

                    foreach ($detalleventa as $detventa) { ?>

                        <div class="cart-item mb-4">
                            <div class="data-item">
                                <div class="plus-minus">
                                    <p class="item-amount mb-4"> <?php echo $detventa['cantidad'] ?></p>
                                </div>
                                <h2><?php echo $detventa['nombre'] ?></h2>
                                <span class="cart-size">talla <?php echo $detventa['talla'] ?></span>
                                <h3>$<?php echo $detventa['precio_venta'] ?></h3>
                                <!-- <span class="remove-item">remove</span> -->
                            </div>
                            <img src="../assets/img/prodgenerales/<?php echo $detventa['imagen']; ?>" alt="">
                        </div>
                        <hr>



                        <?php
                        $subtotal = $subtotal + ($detventa['precio_venta'] * $detventa['cantidad']);

                        ?>


                    <?php
                    }
                    ?>

                    <!-- FIN Cart items -->
                    <div class="saleoff">
                        <form action="descuento.php" method="post">
                            <input type="text" name="codigo" class="saleoff" placeholder="CÓDIGO DE DESCUENTO">
                            <div class="mr-3"><button type="submit" class="btn btn-saleoff">USAR</button></div>
                        </form>
                    </div>
                    <hr>
                    <!-- SUBTOTAL -->
                    <div class="cart-footer mt-4">

                        <div class="subtotal mt-4">
                            <h3>TOTAL</h3>
                            <span>$<?php echo $total2 ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function entre() {
            document.telefono.submit()
        }


    </script>
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

</body>

</html>