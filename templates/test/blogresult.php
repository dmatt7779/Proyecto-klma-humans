<?php
session_start();
include "../../global/conexion.php";
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

<!-- Contenido BLOG -->

    <div class="mt-5 btn-blogshare">
        <button type="button" id="showmedia"><i class="fas fa-ellipsis-v"></i></button>
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

    <!-- Texto de introduccion -->
    <div id="prueba" class="blogcontresult mb-5">
        <div class="mt-2"><h2>MIEDO</h2></div>
        <div class="introresult mt-5 mb-4">
            <p>"DEJAMOS DE TEMER A AQUELLO QUE SE HA<br>APRENDIDO A ENTENDER"</p>
        </div>
        <div><h3>MARIE CURIE</h3></div>
    </div>

    

<script type="text/javascript">

    function showhide(){
        document.getElementById("hideblog").innerHTML = document.getElementById("prueba");
    }
    
    document.getElementById("showmedia").onclick = function() {
        showhide();
    }


</script>
    
</body>
</html>

<?php include "../navbar_footer/scd_footer.php"; ?>