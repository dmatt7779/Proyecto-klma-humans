<?php
    session_start();
    include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos 2 KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body id="pagos1">
<?php include "../navbar_footer/header.php"; ?>

    <div class="containersale2 mt-5">
            <div class="mb-1">
                <div class="steps">CARRITO <i class="fas fa-angle-right m-3"></i> INFORMACI&Oacute;N <i class="fas fa-angle-right m-3"></i> ENV&Iacute;O <i class="fas fa-angle-right m-3"></i> PAGO</div>
            </div>

            <div class="datachance mb-5">
                <div class="minichance">
                    <span>CONTACTO</span> 
                    <button class="btnminichance">CAMBIAR</button>
                </div><hr>
                <div class="minichance">
                    <span>ENVIAR A</span>
                    <button class="btnminichance">CAMBIAR</button>
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
                    <i class="fas fa-chevron-left"><a href="#" class="ml-1">VOLVER A INFORMACIÓN</a></i>
                    <button class="btn btn-shipping">CONTINUAR CON PAGOS</button>
                </div>
            </div>


        <!-- INICIO configuración pasarela de pagos 1 -->
        <div class="pay-form">
            <div class="pay">
                <!-- Contenedor de objetos para el carrito de compras -->
                <div class="cart-content mt-5">
                    <!-- Cart items -->
                    <div class="cart-item mb-4">
                        <div class="data-item">
                            <div class="plus-minus">
                                <p class="item-amount mb-4">1</p>
                            </div>
                            <h2>COMERCIAL BAG</h2>
                            <span class="cart-size">CIRCLE</span>
                            <h3>$15.000</h3>
                            <!-- <span class="remove-item">remove</span> -->
                        </div>
                        <img src="../assets/img/bolso.png" alt="">
                    </div><hr>
                    <!-- FIN Cart items -->
                        <div class="saleoff">
                            <input type="text" class="saleoff" placeholder="CODIGO DE DESCUENTO">
                            <div><button class="btn btn-saleoff">USAR</button></div>
                        </div><hr>
                    <!-- SUBTOTAL -->
                    <div class="cart-footer mt-4">
                        <div class="subtotal">
                            <h3 style="letter-spacing: .6rem;">SUBTOTAL</h3>
                            <span style="font-size: 6pt;">$70.000</span>
                        </div>
                        <div class="subtotal">
                            <h3 style="letter-spacing: 1.1rem;">ENVÍOS</h3>
                            <span style="font-size: 6pt;">$10.000</span>
                        </div><hr>
                        <div class="subtotal mt-4">
                            <h3 style="letter-spacing: 1.5rem;">TOTAL</h3>
                            <span>$80.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

</body>
</html>