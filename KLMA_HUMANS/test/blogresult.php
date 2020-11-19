<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>KLMA' HUMANS</title>
</head>
<body>

<!-- Contenido BLOG -->

    <div class="btn-blogshare mt-5">
        <button type="submit" onclick="showhide()" id="showmedia" class="d-block"><i class="fas fa-ellipsis-v"></i></button>
    </div>

    <div id="hideblog" class="mt-1 container container-blog">
        <div class="row ">
            <div class="col-md-2"></div>
                <div class="text-center col-md-8">
                    <p class="">Todos los hombres, hermano Galión, quieren vivir felizmente. Aspiramos a ser felices y para ello intentamos descubrir qué es. Sin embargo, cada persona posee una respuesta y una definición de felicidad diferente. — Séneca, “De vita beata”<br><br>

                    Es que pocas veces reflexionamos sobre el tema, tal vez, cuando leemos un libro de superación personal o vamos a un retiro espiritual. No sé, cosas de la vida que nos llevan a pensar en la felicidad y en la temida frase ¿eres feliz? que es aún más tediosa que “¿quién eres?” Y se pone peor porque: ¿sabemos la respuesta a esa pregunta?<br><br>

                    La Rae define felicidad como “estado de grata satisfacción espiritual y física” pero se han quedado cortos en la dimensionalidad de palabra y lo pueden hacer, al fin y al cabo, no es un manual para vivir, es uno para definir.<br><br>

                    Me parece curioso que hay emociones o sensaciones que prevalecen en nuestras vidas, siempre somos conscientes de la tristeza, el dolor o el desespero. Pero cuando hablamos de felicidad tenemos que mirar con retrovisor, buscar esos momentos cumbres en nuestra vida y dejarnos llenar por la mezcla de éxtasis y nostalgia que nos producen esos recuerdos.<br><br>

                    Añorar el pasado se convirtió en parte del diario vivir y, la felicidad en recuerdo y no en acciones o experiencias, se quedó ahí para alimentar las sensaciones que impulsan las memorias. Que si la sociedad de consumo, que si los medios, el capitalismo, el socialismo y todos esos instrumentos de poder; pero es que de pronto somos nosotros mismos los encargados de cargar una vida llena de recuerdos memorables y alejarla de la experiencia del momento, del aquí y del ahora.<br><br>
                    </p>
                </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    	<!-- Contenedor para campañas -->
    <div id="white" class="contcampaigns mb-3" hidden>

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

        <!-- SOCIAL MEDIA -->
        <div id="socialmedia" class="socialmedia">
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


    <!-- Texto de introduccion -->
    <div class="blogcontresult mb-5">
        <div class="mt-2"><h2>MIEDO</h2></div>
        <div class="introresult mt-5 mb-4">
            <p>"DEJAMOS DE TEMER A AQUELLO QUE SE HA<br>APRENDIDO A ENTENDER"</p>
        </div>
        <div><h3>MARIE CURIE</h3></div>
    </div>

    

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

<?php include "../navbar_footer/scd_footer.php"; ?>