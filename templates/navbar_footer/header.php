<!-- 
    Encabezado aplicado para todas las paginas.
-->
<header class="mainheader">
    <div class="navlogo">
        <a href="../main/menu.php"><img src="../assets/img/nav_foot/btn_shop.png" alt="Logo de compras"></a>
    </div>

    <div class="navlogo2">
        <a href="../main/menu2.php"><img src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
    </div>

    <div class="nested-nav mr-2">
        <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img src="../assets/img/nav_foot/menu.png" alt="menu 2"></div></a>

        <a href="../login/login.php" class="m-2"><div class="loginmenu"><img src="../assets/img/nav_foot/Login.png" alt="Login de usuarios"></div></a>

        <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img src="../assets/img/nav_foot/Cartera.png" alt="carrito de compras"></div></a>
    </div>
</header>

<!-- Construcción del carrito de compras -->
<!-- INICIO Carrito de compras -->
<div class="cart-overlay" id="divCart" style="visibility:hidden">
	<div class="cart">
		<span class="close-cart">
			<i class="fal fa-times" id="closecart"></i>
		</span>
		<h1>RESUMEN</h1>

		<div class="cart-content">
			<!-- Cart items -->
<?php
            $iduser = isset( $_SESSION['iduser'] );    
            $sentencia = $pdo->prepare("SELECT id FROM ventas where usuarios_id = $iduser and estado = 0");
            $sentencia -> execute();
            $venta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            if (empty($venta)) {
                $ventaid =  "";
            }else{
                $ventaid =  $venta[0]['id'];
            }
        
            $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
            $sentencia -> execute();
            $detalleventa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $subtotal = 0;
        
            foreach($detalleventa as $detventa){
?>
                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span>-</span><p class="item-amount mb-4">&nbsp &nbsp<?php echo $detventa['cantidad'] ?>&nbsp &nbsp</p><span>+</span>
                        </div>
                        <h2><?php echo $detventa['nombre'] ?></h2>
                        <span class="cart-size">talla <?php echo $detventa['talla'] ?></span>
                        <h3>$<?php echo $detventa['precio_venta'] ?></h3>
                        <!-- <span class="remove-item">remove</span> -->
                    </div>
                    <img src="../assets/img/prodgenerales/<?php echo $detventa['imagen']; ?>" alt="">
                </div>
<?php
                $subtotal = $subtotal + ($detventa['precio_venta'] * $detventa['cantidad']);
            }
?>			
			<!-- FIN Cart items -->
		</div>

        <!-- INICIO Cart footer -->
        <div class="cart-footer">
            <div class="subtotal">
                <h3>SUBTOTAL:</h3>
                <span class="cart-total">$<?php echo $subtotal ?></span>
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