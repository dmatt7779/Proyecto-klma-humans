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

</head>
<body>

<nav id="hnav" class="navbar-expand-sm navbar-light">
    <header class="mainheader">
    <div class="navlogo">
            <a href="../main/menu.php"><img src="../assets/img/nav_foot/shop.gif" alt="Logo de compras"></a>
    </div>

    <div class="navlogo2">
            <a href="../main/menu2.php"><img src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
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
                        <span class="cart-size">TALLA <?php echo $detventa['talla'] ?></span>
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




<?php include "../navbar_footer/newsletter.php";?>


<!---------- SCROLL BAR ---------->
<div id="scrollabout">

    <div id="scrolltitleabout">HOME</div>

    <!-- Track -->
    <div class="scrolllightbar">

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

    <div class="row text-center col-sm-12 col-md-12 col-xs-12 aboutstory">
    <p>KLMA'humans se define como una marca de moda psicológica que busca llevar un mensaje trascendental en sus productos a todos sus usuarios a través de imágenes y palabras para mejorar su calidad de vida, enseñando a las personas a aceptar su luz y su sombra y a tener un mejor manejo de sus emociones, sin la pretensión de reemplazar una terapia con un psicoanalista, pero si con la responsabilidad de llevar los mensajes de forma acertada y orientados por profesionales de la salud mental.</p>
    <p>KLMA'humans abre un espacio a la vulnerabilidad, sin juzgar, sin pretender cambiar al otro, sin coartar la expresión y los sentimientos, sin evangelizar, sin querer decir lo que es correcto o no, simplemente extiende sus brazos y da acogida a todos para que se sientan amados y aceptados.</p>
    <p>KLMA ́humans es una mejor amiga o amigo, es una presencia suave y amorosa, cálida, gentil, sonriente y juguetona, que brinda paz y armonía solo con estar ahí, dispuesta a escuchar de forma noble y tranquila. Ella es como un ser divino, que no tiene sexo ni forma definida. Ella es una chispa que te recuerda que todo siempre va a estar bien, y te muestra constantemente el valor de la vida y la importancia de volver a lo esencial, de evolucionar y de soltar para trascender. Su propósito superior es enseñarte a ser feliz a pesar de las adversidades, entendiendo la felicidad como el estado natural de ser.</p>
    </div>

    <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>

    <div class="colum col-md-12 col-xs-12 aboutstory">
        <h1>LLEVAR KLMA A LAS PERSONAS</h1>
        <h2>POTENCIALIZANDO EL COEFICIENTE EMOCIONAL DE CADA UNO</h2>
    </div>

    <div class="row aboutbtn">
        <div class="mt-2">
            <button class="smooth"><img src="../assets/img/test/Paso.png" alt=""></button>
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
		<div><p>MARIE CURIE</p></div>
	</div>
		
	<!-- Contenedor para campañas -->
	<div id="white" class="contcampaigns mb-3">

		<!-- Campaña 1 -->
		<div>
			<a href="#">C1</a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/test/resultemocion/miedo/T-shirt Manga Ranglan.png" alt="producto">
			</div>
			<a href="#">VER PRODUCTO</a>
		</div>

		<!-- Campaña 2 -->
		<div>
			<a href="#">C2</a>
			<div class="tshirtcampaigns mt-2 mb-2">
				<img src="../assets/img/test/resultemocion/miedo/T-shirt Manga Sisa.png" alt="producto">
			</div>
			<a href="#">VER PRODUCTO</a>
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
		<div>
			<a href="#">C3</a>
			<div class="tshirtcampaigns mt-2 mb-2">
				<img src="../assets/img/test/resultemocion/miedo/T-shirt Manga Ranglan.png" alt="producto">
			</div>
			<a href="#">VER PRODUCTO</a>
		</div>

		<!-- Campaña 4 -->
		<div>
			<a href="#">C4</a>
			<div class="tshirtcampaigns mt-2 mb-2">
				<img  src="../assets/img/test/resultemocion/miedo/T-shirt Manga Sisa.png" alt="producto">
			</div>
			<a href="#">VER PRODUCTO</a>
		</div>
	</div>
	<!-- FIN CAMPAÑAS -->

	<div class="introcontresult">
		<div class="btn-blogshare">
			<button type="submit" onclick="showhide()" class="d-block"><i class="fas fa-ellipsis-v"></i></button>
		</div>
		
		<!-- frases para Diseñadores -->
		<div class="wrapper mb-5">
			<div class="slider-testimonial">
				<div class="testimonial-item">
					<div class="designer-text">
						<p>"EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR TESORO"</p>
					</div>
					<div class="autor">
						<p>MIEDO BY SARA VARGAS</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae voluptatem alias quam eligendi culpa error nesciunt dignissimos eaque molestiae.</p>
					</div>
					<div class="autor">
						<p>ALEGRÍA BY SARA VARGAS</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
						<p>"EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR TESORO"</p>
					</div>
					<div class="autor">
						<p>TRISTEZA BY SARA VARGAS</p>
					</div>
				</div>
				<div class="testimonial-item">
					<div class="designer-text">
						<p>"EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR TESORO"</p>
					</div>
					<div class="autor">
						<p>AMOR BY SARA VARGAS</p>
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


<!-- scroll bar -->
<script>
    $(window).scroll(function(event) {
        var scrollTop = $(window).scrollTop()
        $('#scrollwrap').css('top', scrollTop+'px')

        if( scrollTop >= 260 ){
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