<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado Especifico KLMA HUMANS</title>
	
	<!-- CSS only -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
	<link rel="stylesheet" href="sss/sss.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

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

    <!-- JS, Popper.js, and jQuery -->
	<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
	<script src="../assets/librerias/jquery-2.2.4.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
	<script src="../assets/librerias/bootstrap.min.js"></script>
	<script src="sss/sss.js"></script>
	<script src="../assets/js/contactform.js"></script>

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

<?php include "../navbar_footer/footer.php"; ?>