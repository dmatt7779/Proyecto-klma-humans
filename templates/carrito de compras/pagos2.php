<?php
session_start();
include "../../global/conexion.php";

if (!isset($_SESSION['correo'])) {

    header("location:../login/login.php");
}


$iduser = $_SESSION['iduser'];
$sentencia = $pdo->prepare("SELECT * FROM ventas where usuarios_id = $iduser and estado = 0");
$sentencia->execute();
$venta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$total =  100 * (floatval($venta[0]['subtotal']));
$total2 =  floatval($venta[0]['subtotal']);
$porcentaje = $venta[0]['porcentaje']; 

$ref = $_SESSION['apodo'] . "-" . (string)(rand(0, 1000000000000));

$sentencia = $pdo->prepare("SELECT * FROM Direcciones where id_user = $iduser");
$sentencia->execute();
$direcciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
$pagaenvio = $direcciones[0]['pagaenvio'];
$contraentrega = $direcciones[0]['contraentrega'];

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

<body id="pagos1" onload="tipopago()">
    
<nav class="navbar-expand-sm navbar-light">
    <header class="darkmainheader">
    <div class="navlogo">
            <a href="../main/menu.php"><img src="../assets/img/nav_foot/Shop-White.gif" alt="Logo de compras"></a>
    </div>

    <div class="navlogo2">
            <a href="../main/h0m3.php"><img src="../assets/img/nav_foot/logoblanco.png" alt="logo principal"></a>
    </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nested-nav mr-2">

                    <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img src="../assets/img/nav_foot/menu2.png" alt="menu 2"></div></a>

                    <a href="../login/login.php" class="m-2"><div class="loginmenu"><img src="../assets/img/nav_foot/Login2.png" alt="Login de usuarios"></div></a>

                    <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img src="../assets/img/nav_foot/Cartera2.png" alt="carrito de compras"></div></a>
                </div>
            </div>
    </header>
</nav>

    <div class="pay-form mb-5">
        <div class="containersale2">
            <div class="mb-1 mt-5">
                <div class="steps">CARRITO <i class="fas fa-angle-right m-3"></i> INFORMACI&Oacute;N <i class="fas fa-angle-right m-3"></i> ENV&Iacute;O <i class="fas fa-angle-right m-3"></i> PAGO</div>
            </div>

            <div class="datachance mb-5">
                <div class="minichance">
                    <span>CONTACTO</span>
                    <span><?php echo $direcciones[0]['telefono']?></span>
                    <button class="btnminichance" data-toggle="modal" data-target="#exampleModal">CAMBIAR</button>
                </div>
                <hr>
                <div class="minichance">
                    <span>ENVIAR A</span>
                    <span><?php echo $direcciones[0]['nombre']?></span>
                    <button class="btnminichance" data-toggle="modal" data-target="#exampleModal1">CAMBIAR</button>
                </div>

            </div>
            <!-- Button trigger modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" style="z-index: 90;"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">NUEVO NOMBRE DE QUIEN RECIBE Y DIRECCION</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="changenombre.php" name="name" method="post">
                            <label for="imagen" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">NOMBRE</label>
                                <input type="text" value="<?php echo $direcciones[0]['nombre']?>" class="newprofile" name="nombre">
                                <label for="imagen" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">APELLIDO</label>
                                <input type="text" value="<?php echo $direcciones[0]['apellido']?>" class="newprofile" name="apellido">
                                <label for="imagen" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">DIRECCIÓN</label>
                                <input type="text" value="<?php echo $direcciones[0]['direccion']?>" class="newprofile" name="direccion">
                        </div>
                        <div class="modal-footer">
                        <div class="mr-3" ><button type="button" style="align-items: center;position: relative;" onclick="document.name.submit()" class="btn btn-saleoff">CAMBIAR</button></div>
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
                            <h5 class="modal-title" id="exampleModalLabel">NUEVO TELÉFONO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="changedireccion.php" name="telefono" method="post">
                            <label for="imagen" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">TELEFONO</label>
                                <input type="text" value="<?php echo $direcciones[0]['telefono']?>" class="newprofile" name="telefono">
                        </div>
                        <div class="modal-footer">
                        <div class="mr-3"><button type="button" onclick="entre()" class="btn btn-saleoff">CAMBIAR</button></div>
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
                    <label><input type="radio" checked="<?php echo $pagaenvio?>" onclick="handleChangeEnvio();" id="cbox1" value="checkboxsale"></label>
                    <span class="checkboxship">PAGAR ENVÍO</span>
                    <span style="font-size: 10pt; letter-spacing: .5rem;">$10.000</span>
                </div>
            </div>
            <div class="datachance mt-3 mb-4">
                <div class="minichance">
                    <label><input type="radio" checked="<?php echo $contraentrega?>" onclick="handleChangeEnvioContraEntrega();" id="cbox2" value="checkboxsale"></label>
                    <span class="checkboxship">PAGAR ENVÍO CONTRAENTREGA</span>                    
                </div>
            </div>
            <!-- Sección para pasar a pagos -->
            <div>
                <div class="datapay">
                    
                    <!-- wompi -->
                    <form action="https://checkout.wompi.co/p/" method="GET" name="pagos">
                        <!-- OBLIGATORIOS -->
                        <input type="hidden" id="public-key" name="public-key"  />
                        <input type="hidden" id="currency" name="currency" />
                        <input type="hidden" id="amount-in-cent" name="amount-in-cents" />
                        <input type="hidden" id="reference" name="reference"  />
                        <!-- OPCIONALES -->
                        <input type="hidden" id="redirect-url" name="redirect-url" />
                    <button class="btn btn-Wompi" onclick="enviar(event)">PAGAR CON WOMPI</button>
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

                            <div class="cart-item">
                                <div class="data-item">
                                    <div class="plus-minus">
                                        <p class="item-amount mb-4"> <?php echo $detventa['cantidad'] ?></p>
                                    </div>
                                    <h2><?php echo $detventa['nombre'] ?></h2>
                                    <span class="cart-size">talla <?php echo $detventa['talla'] ?></span>
                                    <h3>$<?php echo number_format($detventa['precio_venta']) ?></h3>
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
                            <div class="subtotal mt-3">
                                <h2>DESCUENTO</h2>
                                <span><?php echo $porcentaje?>%</span>
                            </div>
                            <div class="subtotal mt-3">
                                <h3>TOTAL</h3>
                                <span>$<?php echo number_format($total2) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form action="cambiotipopago.php" method="get" name="tipopago">
                        <input type="hidden" name="contraentrega" id="contraentrega" value='<?php echo $contraentrega ?>'>
                        <input type="hidden" name="pagoenvio" id="pagoenvio" value='<?php echo $pagaenvio?>'>
            </form>
    <script>

        function entre() {
            document.telefono.submit()
        }
        function handleChangeEnvio(){
            var x = document.getElementById("cbox2");
            x.checked = false;
            document.getElementById("pagoenvio").value = "true";
            document.getElementById("contraentrega").value = "false";
            document.tipopago.submit()
        }
        function handleChangeEnvioContraEntrega(){
            var x = document.getElementById("cbox1");
            x.checked = false;
            document.getElementById("contraentrega").value = "true";
            document.getElementById("pagoenvio").value = "false";
            document.tipopago.submit()
        }
        function enviar(event){
            var x = document.getElementById("cbox2");
            var d = document.getElementById("cbox1");
            if(x.checked == !false || d.checked == !false){
                
                document.getElementById("public-key").value = "pub_test_Y6nrs8xkNGx5ZhKW06oZX51bFt3ISh7A"
                document.getElementById("amount-in-cent").value = "<?php echo $total ?>"
                document.getElementById("currency").value = "COP"                
                document.getElementById("reference").value = "<?php echo $ref ?>"
                document.getElementById("redirect-url").value = "http://klmahumans.com/templates/carrito%20de%20compras/pagado.php"

                document.pagos.submit()
            }else{
                alert("debes seleccionar una opcion de pago al envio")
                event.preventDefault()
            }
        }
        function tipopago(){
            document.getElementById("cbox2").checked = <?php echo $contraentrega ?>;
            document.getElementById("cbox1").checked = <?php echo $pagaenvio?>;
        }

        function eliminar(iddelete){
            document.getElementById('eliminacion').value = iddelete;
            document.formdeletecart.submit();
        }

        function add(idadd, cantidadold){
            document.getElementById('suma').value = idadd;
            document.getElementById('cantidad').value = cantidadold;

            document.formaddonetocart.submit();
        }

        function remove(idremove , cantidadold2){
            document.getElementById('resta').value = idremove;
            document.getElementById('cantidad2').value = cantidadold2;

            document.formremoveonetocart.submit();
        }

        function aceptar() {
            document.getElementById("acept").value = parseInt(document.getElementById("acept").value) + 1
        }

        function enviarpedido() {
            if (document.getElementById("acept").value % 2 == 0) {
                alert("debe aceptar los terminos y condiciones")
            } else {
                document.finpedido.submit();
            }
        }

    </script>
    
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

</body>

</html>