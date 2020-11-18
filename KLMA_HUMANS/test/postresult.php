<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado Especifico KLMA HUMANS</title>
	
	<!-- CSS only -->
	<link rel="stylesheet" href="sss/sss.css">
	<link rel="stylesheet" href="../assets/style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	
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
			<div id="spotify" class="tshirtcampaigns mt-2 mb-2">
				<a href="https://open.spotify.com/" target="_blank"><img src="../assets/img/test/resultemocion/Interfaz Spotify.png" alt="#"></a>
			</div>

			<!-- SOCIAL MEDIA -->
			<div id="socialmedia" class="d-none socialmedia">
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

		<div class="introcontresult">
			<div class="btn-blogshare">
				<button type="submit" onclick="showhide()" id="showmedia"><i class="fas fa-ellipsis-v"></i></button>
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
	

<!-- Script -->
<!-- Sentences Slider-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="sss/sss.js"></script>


<script>
	jQuery(function($){
		$('.slider-testimonial').sss({
			slideShow : true,
			speed : 3500
		});
	});
</script>

<!-- Ocultar y Mostrar redesociales o compartir -->

<!-- <script type="text/javascript">

	$('#showmedia').click( function(){
		$('#white').css( 'background-color', ' rgb(189,213,220)');
	} );

	function Showspo() {
		document.getElementById("spotify").style.display = "block";
	}

	function hidespo() {
		document.getElementById("spotify").style.display = "none";
	}

	function Showmedia() {
		document.getElementById("socialmedia").style.display = "block";
	}

	function hidemedia() {
		document.getElementById("socialmedia").style.display = "none";
	}

	function showhide () {
		let spo = document.getElementById("spotify");
		let media = document.getElementById("socialmedia");

		if (spo.style.display == "none") {
			Showspo();
		}else {
			hidespo();
		}

	}

</script> -->

</body>
</html>

<?php include "../navbar_footer/scd_footer.php"; ?>