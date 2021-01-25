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
    <title>Pagos KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
    </head>

<body id="pagos1">
<?php include "../navbar_footer/header.php"; ?>

<div class="pay-form mb-5">
    <!-- Contenedor del formulario Izquierda -->
    <div class="containersale">
        <div class="mb-1 mt-5">
            <div class="steps">CARRITO <i class="fas fa-angle-right m-3"></i> INFORMACI&Oacute;N <i class="fas fa-angle-right m-3"></i> ENV&Iacute;O <i class="fas fa-angle-right m-3"></i> PAGO</div>
        </div>
        <div class="datapay">
            <div class="payinfo">INFORMACION DE PAGO</div>
            <div>¿YA TIENES CUENTA?</div>
            <a href="#">INICIAR SESI&Oacute;N</a>
        </div>

        <div class="saleoffcode">
            <input type="text" style="letter-spacing: 2.1rem; text-align: center; padding: 0% 0% 0% 1.5%;" class="saleoffcode mt-3 mb-3" placeholder="CORREO ELECTRÓNICO">
        </div>
        <label class="checkboxform mb-5"><input type="checkbox" id="cbox1" value="checkboxsale"> QUIERO RECIBIR NOTICIAS Y OFERTAS EXCLUSIVAS</label>

        <div class="payinfo">
            <span>DIRECCIÓN DE ENVÍO</span>
        </div>

        <div class="saleoffcode2">
            <input type="text" style="letter-spacing: 2.8rem; text-align: center; padding: 0% 0% 0% 1.5%;; margin-right: 1%;" class="saleoffcode2 mt-3 mb-3" placeholder="NOMBRES">
            <input type="text" style="letter-spacing: 2.1rem; text-align: center; padding: 0% 0% 0% 1.5%;; margin-left: 1%;" class="saleoffcode2 mt-3 mb-3" placeholder="APELLIDOS">
        </div>

        <div class="saleoffcode">
            <input type="text" style="letter-spacing: 4.8rem; text-align: center; padding: 0% 0% 0% 1.5%;" class="saleoffcode mt-3 mb-3" placeholder="DIRECCIÓN">
            <input type="text" style="letter-spacing: 1.144444rem; text-align: center; padding: 0% 0% 0% 1%;" class="saleoffcode mt-3 mb-3" placeholder="APT - LOCAL - ETC - (OPCIONAL)">
            <input type="text" style="letter-spacing: 7.8rem; text-align: center ; padding: 0% 0% 0% 2%;" class="saleoffcode mt-3 mb-3" placeholder="CIUDAD">
        </div>

        <div class="saleoffcode3">
            <input type="text" style="letter-spacing: .9rem; text-align: center; padding: 0% 1.5% 0% 1.5%;" class="saleoffcode3 mt-3 mb-3" placeholder="PAÍS/REGIÓN">
            <input type="text" style="letter-spacing: 1.2rem; text-align: center; padding: 0% 1.5% 0% 1.5%; margin: 0% 2% 0% 2%;" class="saleoffcode3 mt-3 mb-3" placeholder="PROVINCIA">
            <input type="text" style="letter-spacing: 1.9rem; text-align: center; padding: 0% 0% 0% 1.5%;" class="saleoffcode3 mt-3 mb-3" placeholder="BARRIO">
        </div>

        <div class="saleoffcode">
            <input type="text" style="letter-spacing: 5.5rem; text-align: center; padding: 0% 0% 0% 1.5%;" class="saleoffcode mt-3 mb-3" placeholder="TELÉFONO">
        </div>
        <label class="checkboxform mb-4"><input type="checkbox" id="cbox1" value="checkboxsale"> GUARDAR MI INFORMACI&Oacute;N Y CONSULTAR M&Aacute;S R&Aacute;PIDAMENTE LA PR&Oacute;XIMA VEZ</label>

        <div>
            <div class="datapay">
                <i class="fas fa-chevron-left"><a href="#" onclick="javascript:atras();" class="ml-1">VOLVER AL CARRITO</a></i>
                <button class="btn btn-shipping">CONTINUAR CON ENV&Iacute;OS</button>
            </div>
        </div>
    </div>

    



    <!-- INICIO configuración pasarela de pagos 1 -->

        <div class="pay">
            <!-- Contenedor de objetos para el carrito de compras -->
            <div class="cart-content">
                <!-- Cart items -->








    <!-- aqui va lo que pruebo -->
    <?php

        $iduser = $_SESSION['iduser'];      
        $sentencia = $pdo->prepare("SELECT id FROM ventas where usuarios_id = $iduser and estado = 0");
        $sentencia -> execute();
        $venta=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $ventaid =  $venta[0]['id'];
        $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
        $sentencia -> execute();
        $detalleventa=$sentencia->fetchAll(PDO::FETCH_ASSOC);

     



    $subtotal = 0;

    foreach($detalleventa as $detventa){ ?>
    
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
                </div><hr>



                <?php 
            $subtotal = $subtotal + ($detventa['precio_venta'] * $detventa['cantidad']);
                
    ?>


    <?php  
    }
    $iva = ($subtotal * 19)/100;
    $total = $subtotal + $iva;

    ?>
            <!-- FIN Cart items -->
                <div class="saleoff">
                    <input type="text" class="saleoff" placeholder="CÓDIGO DE DESCUENTO">
                    <div class="mr-3"><button class="btn btn-saleoff">USAR</button></div>
                </div><hr>
            <!-- SUBTOTAL -->
            <div class="cart-footer mt-4">
                <div class="subtotal">
                    <h3>SUBTOTAL</h3>
                    <span style="font-size: 6pt;">$<?php echo $subtotal?></span>
                </div>
                <p>EL COSTO DE ENVIO SER&Aacute; VISIBLE EN EL SIGUIENTE PASO</p><hr>
                <div class="subtotal mt-4">
                    <h3>TOTAL</h3>
                    <span>$<?php echo $total?></span>
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

    <script>

        function atras(){
        window.history.back();
        window.history.back();
        }
    </script>

</body>
</html>

<?php //include "../navbar_footer/scd_footer.php"  ?>