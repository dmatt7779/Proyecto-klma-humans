<?php
session_start();
include "../../global/conexion.php";

$blog = $_POST['blog'];
$frase = $_POST['frase'];
$escritor = $_POST['escritor'];
$emocion = $_POST['emocion'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- CSS only -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>KLMA' HUMANS</title>
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<!-- Scroll Bar personalizado -->

<div id="scrollblog">

    <div id="scrolltitleblog">BLOG</div>

    <!-- Track -->
    <div class="scrolllightbar">

    <!-- Thumbs -->
        <div id="scrollwrap" class="scrollblock">
        </div>
    </div>
</div>

<!-- Contenido BLOG -->

<div class="btn-blogshare mt-5">
    <button type="submit" onclick="showhide()" class="d-block"><i class="fas fa-ellipsis-v"></i></button>
</div>

    <div id="white" class="mt-1 container container-blog">
        <div class="row">
            <div class="col-md-2"></div>
                <div id="textDiv" class="text-center col-md-8">
                    <p class=""><?php echo $blog ?>
                    </p>
                </div>
            <div class="col-md-2"></div>

            <!-- SOCIAL MEDIA -->
            <div id="socialmedia2" class="jumbotronsocialmedia mt-5" hidden>
                <div class="container contentsharesocialmedia">
                    <div class="col-md-4 container"></div>
                    <div class="container sharesocialmedia">
                        <a class="ml-5" target="_blank" href="https://www.facebook.com/klmahum"><img src="../assets/img/test/Face.png" alt="Logo de Facebook"></a>
                        <a target="_blank" href="https://www.instagram.com/klmahum/"><img src="../assets/img/test/Instagram.png" alt="Logo de Instagram"></a>
                        <a target="_blank" href="https://twitter.com/klmahum"><img src="../assets/img/test/Twitter.png" alt="Logo de twitter"></a>
                        <a target="_blank" class="mr-5" href="#"><img src="../assets/img/test/Enlace.png" alt="Logo para compartir enlace"></a>
                    </div>
                    <div class="col-md-4 container"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Texto de introduccion -->
    <div id="prueba" class="blogcontresult mt-3 mb-5">
        <div class="mt-2"><h2><?php echo $emocion ?></h2></div>
        <div class="introresult mt-5 mb-4">
            <p><?php echo $frase ?></p>
        </div>
        <div><h3><?php echo $escritor ?></h3></div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
	<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
	<script src="../assets/librerias/bootstrap.min.js"></script>

<!-- Ocultar y Mostrar redesociales o compartir -->
<script type="text/javascript">

	function showhide() {

		jQuery( function( $ ){
			if($('#textDiv').attr( 'hidden' )){
				$('#textDiv').removeAttr( 'hidden' );
				$('#socialmedia2').attr( 'hidden', true );
				$('#white').removeClass( 'contcampaignsBG' );
			} else {
				$('#textDiv').attr( 'hidden', true );
				$('#socialmedia2').removeAttr( 'hidden' );
				$('#white').addClass( 'contcampaignsBG' );
			}
		});
	}
</script>

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
</body>
</html>

<?php include "../navbar_footer/footer.php"; ?>