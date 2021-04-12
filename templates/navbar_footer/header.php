<!--
    Encabezado aplicado para todas las paginas.
-->


<nav class="navbar-expand-sm navbar-light">
    <header class="mainheader">
    <div class="navlogo">
            <a href="../main/menu.php"><img src="../assets/img/nav_foot/shop.gif" alt="Logo de compras"></a>
    </div>

    <div class="navlogo2">
            <a href="../main/h0m3.php"><img src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
    </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nested-nav mr-2">

                    <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img src="../assets/img/nav_foot/menu.png" alt="menu 2"></div></a>

                    <a href="../login/login.php" class="m-2"><div class="loginmenu"><img src="../assets/img/nav_foot/Login.png" alt="Login de usuarios"></div></a>

                    <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img src="../assets/img/nav_foot/Cartera.png" alt="carrito de compras"></div></a>
                </div>
            </div>
    </header>
</nav>

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
            if(!empty($_SESSION['iduser'])){

            $iduser = $_SESSION['iduser'] ;    
            }else{
                
                $iduser = -1;

            }

            
            $sentencia = $pdo->prepare("SELECT id FROM ventas where usuarios_id = $iduser and estado = 0");
            $sentencia -> execute();
            $venta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            if (empty($venta)) {
                $ventaid =  "";
            }else{
                $ventaid =  $venta[0]['id'];
            }
        
            $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.manga, detalleventa.id, detalleventa.genero, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen, productos.tipologia_id, productos.codigo from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
            $sentencia -> execute();
            $detalleventa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $subtotal = 0;

            

?> 

<!-- formulario de eliminacion -->
    <form action="../interfaz_cliente/deletecart.php" method="post" name="formdeletecart">
                    <input type="hidden" id="eliminacion" name="iddetalleventa" >                    
    </form>


            <!-- formulario de suma -->
    <form action="../interfaz_cliente/addonetocart.php" method="post" name="formaddonetocart">
                    <input type="hidden" id="suma" name="iddetalleventasuma" > 
                    <input type="hidden" id="cantidad" name="cantidadsuma" > 

    </form>



<!-- formulario resta -->
    <form action="../interfaz_cliente/removeonetocart.php" method="post" name="formremoveonetocart">
                    <input type="hidden" id="resta" name="iddetalleventaresta" >
                    <input type="hidden" id="cantidad2" name="cantidadresta" >
    </form>



<?php
            foreach($detalleventa as $detventa){
?>
                <span class="close-cart">
			    <i class="fal fa-times pr-2" style="font-size: 15px!important;" onclick="eliminar(<?php echo $detventa['id'] ?>)"></i>
		        </span>
                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span onclick="remove(<?php echo $detventa['id'] ?>,<?php echo $detventa['cantidad'] ?>)">-</span><p class="item-amount mb-4">&nbsp &nbsp<?php echo $detventa['cantidad'] ?>&nbsp &nbsp</p><span onclick="add(<?php echo $detventa['id'] ?>,<?php echo $detventa['cantidad'] ?>)">+</span>
                        </div>
                        <h2><?php echo $detventa['codigo'] ?></h2>
                        <?php 
                            if($detventa['tipologia_id'] != 2) {
                            
                        ?>
                        <span class="cart-size">TALLA <?php echo $detventa['talla'] ?></span>

                    <?php }?>
                        <?php
                            if($detventa ['tipologia_id'] == 3){
                        ?>
                        <h3>GENERO <?php 
                            if(empty(($detventa['genero']))){

                                echo "";

                            }else{
                                echo $detventa['genero'];
                            }
                        
                        ?></h3>
                    <?php
                    }
                    ?>
                        <?php
                            if($detventa ['tipologia_id'] == 3){
                            
                        ?>
                         <span class="cart-size">MANGA <?php 
                            if(empty(($detventa['manga']))){

                                echo "";

                            }else{
                                echo $detventa['manga'];
                            }
                        
                        ?></span>
                    <?php
                    }
                    ?>
                        <h3>$ <?php echo number_format($detventa['precio_venta']) ?></h3>
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
                <span class="cart-total">$<?php echo number_format($subtotal) ?></span>
            </div>
            <p>EL COSTO DE ENVIO SERÁ VISIBLE EN EL PROCESO DE PAGO</p>
                <!-- INPUT PERSONALIZADO-->
                <label class="custom-radio-tyc">
                     <!-- Input oculto  -->

                    <input class="custom-radio-tyc__input" type="radio">
                     <!--Imagen en sustitucion -->
                    <span class="custom-radio-tyc__show custom-radio-tyc__show--radio"></span>
                </label>
            <p class="text-center">ACEPTO LOS TERMINOS Y CONDICIONES</p>
            <div class="finalshop">
            <form action="../carrito de compras/finalpedido.php" method="post">
                <input type="hidden" name="id" value="<?php echo $ventaid ?>">
                <input type="hidden" name="subtotal" value="<?php echo $subtotal ?>">
                <button type="submit" class="btn btn-submit">FINALIZAR PEDIDO</button>
            </form>
            </div>
        </div>
	</div>
</div>


<script>
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
</script>

<!-- FIN Carrito de compras -->