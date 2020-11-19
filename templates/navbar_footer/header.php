<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>KLMA HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<!-- INICIO HEADER -->

<header class="mainheader">
    <div class="navlogo">
        <a href="../main/menu.html"><img src="../assets/img/nav_foot/btn_shop.png" alt="Logo de compras"></a>
    </div>

    <div class="navlogo2">
        <a href="../index.html"><img src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
    </div>

    <div class="nested-nav mr-2">
        <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img src="../assets/img/nav_foot/menu.png" alt="menu 2"></div></a>

        <a href="#" class="m-2"><div class="loginmenu"><img src="../assets/img/nav_foot/Login.png" alt="Login de usuarios"></div></a>

        <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img src="../assets/img/nav_foot/Cartera.png" alt="carrito de compras"></div></a>
    </div>
</header>
<!-- FIN HEADER -->

<!-- INICIO Carrito de compras -->
    <div class="cart-overlay" id="divCart2">
        <div class="cart">
            <span class="close-cart">
                <i class="fas fa-times" id="closecart"></i>
            </span>
            <h1>RESUMEN</h1>

            <div class="cart-content">
                <!-- Cart items -->
                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span>-</span><p class="item-amount mb-4"></p><span></span>
                        </div>
                        <h2>COMERCIAL BAG</h2>
                        <span class="cart-size">CIRCLE</span>
                        <h3>$15.000</h3>
                        <!-- <span class="remove-item">remove</span> -->
                    </div>
                    <img src="../assets/img/bolso.png" alt="">
                </div>

                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span>-</span><p class="item-amount mb-4">&nbsp &nbsp1&nbsp &nbsp</p><span>+</span>
                        </div>
                        <h2>COMERCIAL BAG</h2>
                        <span class="cart-size">CIRCLE</span>
                        <h3>$15.000</h3>
                        <!-- <span class="remove-item">remove</span> -->
                    </div>
                    <img src="../assets/img/John_Elliott.jpg" alt="">
                </div>
                <!-- FIN Cart items -->
            </div>

            <!-- INICIO Cart footer -->
            <div class="cart-footer">
                <div class="subtotal">
                <h3>SUBTOTAL:</h3>
                <span class="cart-total">$0</span>
                </div>
                <p>EL COSTO DE ENVIO SERÁ VISIBLE EN EL PROCESO DE PAGO</p>
                <p>ACEPTO LOS TERMINOS Y CONDICIONES</p>
                    <div class="finalshop">
                        <button class="btn btn-submit">FINALIZAR PEDIDO</button>
                    </div>
            </div>
        </div>
    </div>
<!-- FIN Carrito de compras -->

































<!-- JS, Popper.js, and jQuery -->
<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
<script src="../assets/librerias/popper.min.js"></script>
<script src="../assets/librerias/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$('#btnCart, #aAddCart2').click( function(){ $('#divCart').css( 'visibility', 'visible' ) } );
$('#closecart').click( function(){ $('#divCart').css('visibility', 'hidden')});
</script>


</body>
</html>