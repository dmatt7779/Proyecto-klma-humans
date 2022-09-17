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
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="../assets/style/style.css"> -->
    <link rel="stylesheet" href="../test/sss/sss.css">
    <link rel="stylesheet" href="../assets/style/style.css?v=<?php echo(rand()); ?>" />

</head>
<body>
<?php include "../navbar_footer/newsletter.php";?>

<nav id="hnav" class="navbar-expand-sm navbar-light">
    <header class="mainheader mainheader2">
        <div class="navlogo">
                <a href="../main/menu.php"><img id="logoshopnav" src="../assets/img/nav_foot/shop.gif" alt="Logo de compras"></a>
        </div>

        <div class="navlogo2">
            <a href="h0m3.php"><img id="logomainnav" src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
            <a href="../test/test.php" id="lbtngo-test" class="btn btnGoTest" hidden>HACER TEST</a>
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
                <input class="custom-radio-tyc__input" onclick="aceptar()" type="checkbox">
                <!--Imagen en sustitucion -->
                <span class="custom-radio-tyc__show custom-radio-tyc__show--checkbox"></span>
            </label>
            <p class="text-center">ACEPTO LOS TERMINOS Y CONDICIONES</p>
            <div class="finalshop">
                <form action="../carrito de compras/finalpedido.php" method="post" name="finpedido">
                    <input type="hidden" name="id" value="<?php echo $ventaid ?>">
                    <input type="hidden" name="subtotal" value="<?php echo $subtotal ?>">
                </form>
                <button  onclick="enviarpedido()" type="submit" class="btn btn-submit">FINALIZAR PEDIDO</button>
                <input type="hidden" id="acept" value="0">

            </div>
        </div>
	</div>
</div>
<!-- FIN Carrito de compras -->

<!---------- SCROLL BAR ---------->
<div id="scrollabout">

    <div id="scrolltitlehome">HOME</div>

    <!-- Track -->
    <div class="scrolllightbarHome">

    <!-- Thumbs -->
        <div id="scrollwrap" class="scrollblock">
        </div>
    </div>
</div>

<!-- Sección SLIDER -->
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="../assets/img/home/Velux_Velux_light_tunnel.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/home/The_Daily_Edited_The_Daily_Edited_Melbourne_Flagship_by_Pattern_Studio_Yellowtrace_02.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="../assets/img/home/Six_N._Five_Six_N_Five_x_Morgane_Roux.jpg" alt="Third slide">
        </div>
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

<!-- Sección ABOUT -->
<section class="mt-5">
    <div class="container-fluid p-5">

    <div class="row text-center col-sm-12 col-md-12 col-xs-12 aboutstoryHome">
    <p>CREAMOS ARTE A TRAVÉS DE TU EXPRESIÓN EMOCIONAL</p>
    <p>Somos una marca de moda psicológica que lleva un mensaje trascendental en cada uno de nuestros productos para mejorar la calidad de vida del SER humano.<br> Permitirnos ser vulnerables, trascender y llevar KLMA a las personas es nuestra misión en el mundo.</p>
    <p>KLMA' humans es un espacio que extiende sus brazos y da acogida al amor y la aceptación, como un mejor amigo, ese que te brinda una compañía cálida, gentil y sonriente. De esas que brindan paz y armonía con solo estar ahí.</p>
    <p>Somos la chispa que te recuerda que todo siempre va a estar bien, que te muestra el valor de la vida, la importancia de volver a lo esencial, de evolucionar y de soltar para trascender.</p>
    </div>

    <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>

    <div class="colum col-md-12 col-xs-12 aboutstoryHome">
        <h1>LLEVAR KLMA A LAS PERSONAS</h1>
        <h2>POTENCIALIZANDO EL COEFICIENTE EMOCIONAL DE CADA UNO</h2>
    </div>

    <div class="row aboutbtn" id="emociones">
        <div class="mt-2">
            <button class="smooth"><img src="../assets/img/test/abajo.gif" alt=""></button>
        </div>
    </div>
    </div>
</section>

<!-- Seccion Ramdom T-shirts -->
<section>
	<!-- Texto de introduccion -->
	<div class="introcontresult mt-5">
		<div class="introresult mb-2">
			<p>"DEJAMOS DE TEMER A AQUELLO QUE SE HA<br>APRENDIDO A ENTENDER"</p>
		</div>
		<div class="contautor"><p><a href="../contenido/public_blog.php">MARIE CURIE</a></p></div>
	</div>
		
	<!-- Contenedor para campañas -->
	<div id="white" class="contcampaigns mb-3">

		<!-- Campaña 1 -->

        <?php

       $emociones = array(
            "1" => "amor",
            "2" => "tristeza",
            "3" => "ira",
            "4" => "felicidad",
            "5" => "alegria",
            "6" => "miedo"
       );
        $numero1 = mt_rand(1,6);
        $numero2 = mt_rand(1,6);
        $numero3 = mt_rand(1,6);
        $numero4 = mt_rand(1,6);

        $seleccion1 = mt_rand(0,3);
        $seleccion2 = mt_rand(0,3);
        $seleccion3 = mt_rand(0,3);
        $seleccion4 = mt_rand(0,3);      
        
        
        $emocion1 = $emociones[strval($numero1)];    
        $emocion2 = $emociones[strval($numero2)];    
        $emocion3 = $emociones[strval($numero3)];    
        $emocion4 = $emociones[strval($numero4)];    
       


	$sentencia1 = $pdo->prepare("SELECT * FROM productos where habilitado = 1 and tipologia_id = 3 and emocion = '$emocion1'");
    $sentencia1 -> execute();
    $listaproductos1=$sentencia1->fetchAll(PDO::FETCH_ASSOC);

    $sentencia2 = $pdo->prepare("SELECT * FROM productos where habilitado = 1 and tipologia_id = 3 and emocion = '$emocion2'");
    $sentencia2 -> execute();
    $listaproductos2=$sentencia2->fetchAll(PDO::FETCH_ASSOC);

    $sentencia3 = $pdo->prepare("SELECT * FROM productos where habilitado = 1 and tipologia_id = 3 and emocion = '$emocion3'");
    $sentencia3 -> execute();
    $listaproductos3=$sentencia3->fetchAll(PDO::FETCH_ASSOC);

    $sentencia4 = $pdo->prepare("SELECT * FROM productos where habilitado = 1 and tipologia_id = 3 and emocion = '$emocion4'");
    $sentencia4 -> execute();
    $listaproductos4=$sentencia4->fetchAll(PDO::FETCH_ASSOC);
	?>
		<div class="contenedorCampañas">
			<a onclick="seecampain(<?php echo $listaproductos1[$seleccion1]['campaña']?>)" href="#">C<?php echo $listaproductos1[$seleccion1]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos1[$seleccion1]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos1[$seleccion1]['id']?>)" href="#">VER PRODUCTO</a>
		</div>

		<div class="contenedorCampañas">
			<a onclick="seecampain(<?php echo $listaproductos2[$seleccion2]['campaña']?>)" href="#">C<?php echo $listaproductos2[$seleccion2]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos2[$seleccion2]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos2[$seleccion2]['id']?>)" href="#">VER PRODUCTO</a>
		</div>

		<!-- SPOTIFY -->
		<div id="divSpotify" class="tshirtcampaigns mt-2 mb-2">
			<a href="https://open.spotify.com/" target="_blank"><img src="../assets/img/test/resultemocion/Interfaz Spotify.png" alt="#"></a>
		</div>

		<!-- SOCIAL MEDIA -->
		<div id="socialmedia" class="socialmedia" hidden>
			<a class="ml-5" href="#"><img src="../assets/img/test/Face.png" alt="Logo de Facebook"></a>
			<a href="#"><img src="../assets/img/test/Instagram.png" alt="Logo de Instagram"></a>
			<a href="#"><img src="../assets/img/test/Twitter.png" alt="Logo de twitter"></a>
			<a class="mr-5" href="#"><img src="../assets/img/test/Enlace.png" alt="Logo para compartir enlace"></a>
		</div>

		<!-- Campaña 3 -->
		<div class="contenedorCampañas">
			<a onclick="seecampain(<?php echo $listaproductos3[$seleccion3]['campaña']?>)" href="#">C<?php echo $listaproductos3[$seleccion3]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos3[$seleccion3]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos3[$seleccion3]['id']?>)" href="#">VER PRODUCTO</a>
		</div>

		<!-- Campaña 4 -->
		<div class="contenedorCampañas">
			<a onclick="seecampain(<?php echo $listaproductos4[$seleccion4]['campaña']?>)" href="#">C<?php echo $listaproductos4[$seleccion4]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos4[$seleccion4]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos4[$seleccion4]['id']?>)" href="#">VER PRODUCTO</a>
		</div>
	</div>
	<!-- FIN CAMPAÑAS -->

    <form action="../Prod_especifico/especifico-transition.php" name="formclothes" method="post">
			<input type="hidden" name="id" id="id">
	</form>

	<form action="../Rejillas_generales/capsulestest.php" name="formcapsule" method="post">
			<input type="hidden" name="campaña" id="campaña">
	</form>

    <form action="../Prod_especifico/especifico-transition.php" name="formfrases" method="post">
			<input type="hidden" name="id" id="idfrase">
	</form>


	<div class="introcontresult">
		<div class="btn-blogshare">
			<button type="submit" onclick="showhide()" class="d-block"><i class="fas fa-ellipsis-v"></i></button>
		</div>
		
		<!-- frases para Diseñadores -->
		<div class="wrapper mb-5">
			<div class="slider-testimonial">
				<div class="testimonial-item">
					<div class="designer-text">
                        <p onclick="enviar('<?php echo $listaproductos1[$seleccion1]['id'] ?>')"> <a><?php echo $listaproductos1[$seleccion1]['frase'] ?></a></p>
					</div>
					<div class="autor">
						<p><?php echo $listaproductos1[$seleccion1]['emocion']?> BY <?php echo $listaproductos1[$seleccion1]['diseñador']?></p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
                    <p onclick="enviar('<?php echo $listaproductos2[$seleccion2]['id'] ?>')"> <a><?php echo $listaproductos2[$seleccion2]['frase'] ?></a></p>
					</div>
					<div class="autor">
						<p><?php echo $listaproductos2[$seleccion2]['emocion']?> BY <?php echo $listaproductos1[$seleccion2]['diseñador']?></p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
                    <p onclick="enviar('<?php echo $listaproductos3[$seleccion3]['id'] ?>')"> <a><?php echo $listaproductos3[$seleccion3]['frase'] ?></a></p>
					</div>
					<div class="autor">
						<p><?php echo $listaproductos3[$seleccion3]['emocion']?> BY <?php echo $listaproductos1[$seleccion3]['diseñador']?></p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
                    <p onclick="enviar('<?php echo $listaproductos4[$seleccion4]['id'] ?>')"> <a><?php echo $listaproductos4[$seleccion4]['frase'] ?></a></p>
					</div>
					<div class="autor">
						<p><?php echo $listaproductos4[$seleccion4]['emocion']?> BY <?php echo $listaproductos1[$seleccion4]['diseñador']?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- JS, Popper.js, and jQuery -->
<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
        <script src="../assets/librerias/jquery-2.2.4.min.js"></script>
        <script src="../assets/librerias/popper.min.js"></script>
        <script src="../assets/librerias/bootstrap.min.js"></script>
        <script src="../test/sss/sss.js"></script>

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


<!-- Dynamic Navbar -->
<script>
    window.addEventListener('scroll', function() {

        let routenavbar = "../assets/img/nav_foot/"
        let header = document.querySelector('header');
        let windowPosition = window.scrollY;

        header.classList.toggle('scrolling-active', windowPosition > 680);

        if( windowPosition >= 680 ){
            $('#logoshopnav').attr( 'src', routenavbar + 'Shop-White.gif');
            $('#dotsnav').attr( 'src', routenavbar + 'menu2.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login2.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera2.png');
            $('#logomainnav').attr( 'hidden', true );
            $('#lbtngo-test').removeAttr( 'hidden' );
        }else if(windowPosition < 680) {
            $('#logoshopnav').attr( 'src', routenavbar + 'shop.gif' );
            $('#dotsnav').attr( 'src', routenavbar + 'menu.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera.png');
            $('#lbtngo-test').attr( 'hidden', true );
            $('#logomainnav').removeAttr( 'hidden' );
        }
    })

</script>

<!-- scroll bar -->
<script>
    $(window).scroll(function(event) {
        var scrollTop = $(window).scrollTop()
        $('#scrollwrap').css('top', scrollTop+'px')

        if( scrollTop >= 1600 ){
            $('#scrollwrap').css('display', 'none')
            $('#scrollwrap').parent().css('display', 'none')
        } else if( scrollTop >= 0 ){
            $('#scrollwrap').css('display', 'block')
            $('#scrollwrap').parent().css('display', 'block')
        } else if( scrollTop < 0 ){
            $('#scrollwrap').css('display', 'none')
            $('#scrollwrap').parent().css('display', 'none')
        }
    });
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

<script>
	function seeclothes(id){
		document.getElementById('id').value = id
		document.formclothes.submit()
	}

	function seecampain(campain){
		document.getElementById('campaña').value = campain
		document.formcapsule.submit()
	}

    function enviar(id){
        console.log("entró a la funcion de JS")
		document.getElementById('idfrase').value = id
		document.formfrases.submit()		
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