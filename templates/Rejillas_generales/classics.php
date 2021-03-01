<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../test/sss/sss.css">

</head>
<body>

<!-- navbar -->

<nav id="hnav" class="navbar-expand-sm navbar-light">
    <header class="mainheader mainheader2">
        <div class="navlogo">
                <a href="../main/menu.php"><img id="logoshopnav" src="../assets/img/nav_foot/shop.gif" alt="Logo de compras"></a>
        </div>

        <div class="navlogo2">
        <!-- <img id="logomainnav" src="../assets/img/nav_foot/Logo.png" alt="logo principal"> -->
            <a href="../main/h0m3.php"><img id="logomainnav" src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
            
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nested-nav mr-2">

                    <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img id="dotsnav" src="../assets/img/nav_foot/menu.png" alt="menu 2"></div></a>

                    <a href="../login/login.php" class="m-2"><div class="loginmenu"><img id="loginnav" src="../assets/img/nav_foot/Login.png" alt="Login de usuarios"></div></a>

                    <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img id="shopcartnav" src="../assets/img/nav_foot/Cartera.png" alt="carrito de compras"></div></a>
                </div>
            </div>
    </header>
</nav>

<!-- navbar -->

<section class="hero"></section>
<section class="demo-content"></section>


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
        
            $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.manga, detalleventa.genero, detalleventa.id, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
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
                <!-- <span class="close-cart"
			    <i class="fal fa-times" onclick="eliminar(<//?php echo $detventa['id'] ?>)"></i>
		        </span> -->
                    <div class="data-item">
                        <div class="plus-minus">
                            <span onclick="remove(<?php echo $detventa['id'] ?>,<?php echo $detventa['cantidad'] ?>)">-</span><p class="item-amount mb-4">&nbsp &nbsp<?php echo $detventa['cantidad'] ?>&nbsp &nbsp</p><span onclick="add(<?php echo $detventa['id'] ?>,<?php echo $detventa['cantidad'] ?>)">+</span>
                        </div>
                        <h2><?php echo $detventa['nombre'] ?></h2>
                        <span class="cart-size">TALLA <?php echo $detventa['talla'] ?></span>
                        <h3>Genero <?php 
                            if(empty(($detventa['genero']))){

                                echo "";

                            }else{
                                echo $detventa['genero'];
                            }
                        
                        ?></h3>
                         <h3>Manga <?php 
                            if(empty(($detventa['manga']))){

                                echo "";

                            }else{
                                echo $detventa['manga'];
                            }
                        
                        ?></h3>
                        
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
                <p>ACEPTO LOS TERMINOS Y CONDICIONES</p>
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
<!-- FIN Carrito de compras -->


<?php 

$sentencia = $pdo->prepare("SELECT imagen FROM classics WHERE habilitado = 1");
$sentencia->execute();
$classics = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- Sección SLIDER -->
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    
        <div class="carousel-item active">
        <img class="d-block w-100" src="../assets/img/<?php echo $classics[0]['imagen']?>" alt="First slide">
        </div>
        <?php
    for($i=1 ; $i < count($classics) ;  $i++){
    ?>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/<?php echo $classics[$i]['imagen']?>" alt="Second slide">
        </div>
    <?php } ?>    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="hmcarousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="hmcarousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>




<!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/jquery-2.2.4.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../test/sss/sss.js"></script>

<!-- Dynamic Navbar -->
<script>

    window.addEventListener('scroll', function() {

        let routenavbar = "../assets/img/nav_foot/"
        let header = document.querySelector('header');
        let windowPosition = window.scrollY;

        header.classList.toggle('scrolling-active', windowPosition > 870);

        if( windowPosition >= 870 ){
            $('#logoshopnav').attr( 'src', routenavbar + 'Shop-White.gif');
            $('#dotsnav').attr( 'src', routenavbar + 'menu2.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login2.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera2.png');
            $('#logomainnav').attr( 'hidden', true );
            $('#lbtngo-test').removeAttr( 'hidden' );
        }else if(windowPosition < 870) {
            $('#logoshopnav').attr( 'src', routenavbar + 'shop.gif' );
            $('#dotsnav').attr( 'src', routenavbar + 'menu.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera.png');
            $('#lbtngo-test').attr( 'hidden', true );
            $('#logomainnav').removeAttr( 'hidden' );
        }
    })

</script>

<!-- Sentences Slider-->
<script>
	jQuery(function($){
		$('.slider-testimonial').sss({
			slideShow : true,
			speed : 3500
		});
	});
</script>

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

<!-- Ocultar y Mostrar redesociales o compartir -->
<script type="text/javascript">

	function showhide() {

		jQuery( function( $ ){
			if($('#divSpotify').attr( 'hidden' )){
				$('#divSpotify').removeAttr( 'hidden' );
				$('#socialmedia').attr( 'hidden', true );
				$('#white').removeClass( 'contcampaignsBG' );
			} else {
				$('#divSpotify').attr( 'hidden', true );
				$('#socialmedia').removeAttr( 'hidden' );
				$('#white').addClass( 'contcampaignsBG' );
			}
		} );
	}
</script>

</body>
</html>
<?php include "../navbar_footer/footer.php";?>