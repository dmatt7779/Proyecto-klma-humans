<?php
session_start();
include "../../global/conexion.php";

$emocion = "amor";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado Especifico KLMA HUMANS</title>

	<!-- CSS only -->
	<link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
<!-- 	<link rel="stylesheet" href="../assets/style/style.css"> -->
<link rel="stylesheet" href="../assets/style/style.css?v=<?php echo(rand()); ?>" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="../test/sss/sss.css">
</head>
<body>
<?php include "../navbar_footer/header.php";

$usuario = $_SESSION['correo'];
if (empty($usuario)) {
    
    header("location:../login/login.php");
}


?>

<!-- Scroll Bar personalizado -->
<div id="scrollpostresults">

    <div id="scrolltitleAmor">AMOR</div>

    <!-- Track -->
    <div class="scrolllightbar">

        <!-- Thumbs -->
        <div id="scrollwrap" class="scrollblock"></div>
    </div>
</div>

	<!-- Texto de introduccion -->
	<div class="introcontresult mt-5">
		<div class="introresult mb-2">
			<p>"DEJAMOS DE TEMER A AQUELLO QUE SE HA<br>APRENDIDO A ENTENDER"</p>
		</div>
		<div class="contautor"><p><a href="blogresult.php">MARIE CURIE</a></p></div>
	</div>

	<!-- Contenedor para campañas -->
	<div id="white" class="contcampaigns mb-3">
	<?php
	$sentencia = $pdo->prepare("SELECT * FROM productos where habilitado = 1 and tipologia_id = 3 and emocion = '$emocion'");
    $sentencia -> execute();
    $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
	?>
		<!-- Campaña 1 -->
		<div>
			<a onclick="seecampain(<?php echo $listaproductos[0]['campaña']?>)" href="#">C<?php echo $listaproductos[0]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos[0]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos[0]['id']?>)" href="#">VER PRODUCTO</a>
		</div>

		<!-- Campaña 2 -->
		<div>
			<a onclick="seecampain(<?php echo $listaproductos[1]['campaña']?>)" href="#">C<?php echo $listaproductos[1]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos[1]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos[1]['id']?>)" href="#">VER PRODUCTO</a>
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
			<a onclick="seecampain(<?php echo $listaproductos[2]['campaña']?>)" href="#">C<?php echo $listaproductos[2]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos[2]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos[2]['id']?>)" href="#">VER PRODUCTO</a>
		</div>

		<!-- Campaña 4 -->
		<div>
			<a onclick="seecampain(<?php echo $listaproductos[3]['campaña']?>)" href="#">C<?php echo $listaproductos[3]['campaña']?></a>
			<div class="tshirtcampaigns mt-2 mb-2 mt-2 mb-2">
				<img src="../assets/img/prodgenerales/<?php echo $listaproductos[3]['imagen']; ?>" alt="producto">
			</div>
			<a onclick="seeclothes(<?php echo $listaproductos[3]['id']?>)" href="#">VER PRODUCTO</a>
		</div>
	</div>
	<!-- FIN CAMPAÑAS -->

	<form action="../Prod_especifico/especifico-transition.php" name="formclothes" method="post">
			<input type="hidden" name="id" id="id">
	</form>

	<form action="../Rejillas_generales/capsulestest.php" name="formcapsule" method="post">
			<input type="hidden" name="campaña" id="campaña">
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

<script>
	function seeclothes(id){
		document.getElementById('id').value = id
		document.formclothes.submit()
	}

	function seecampain(campain){
		document.getElementById('campaña').value = campain
		document.formcapsule.submit()
	}
</script>

</body>
</html>

<?php include "../navbar_footer/footer.php"; ?>