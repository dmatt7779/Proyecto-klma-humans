<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About KLMA HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<!---------- SCROLL BAR ---------->

<div id="scrollabout">

    <div id="scrolltitleabout">ABOUT</div>

    <!-- Track -->
    <div class="scrolllightbarabout">

    <!-- Thumbs -->
        <div id="scrollwrapabout" class="scrollblock">
        </div>
    </div>
</div>


    <div class="container-fluid p-5">

        <div class="row text-center col-sm-12 col-md-12 col-xs-12 aboutstory">
        <p>KLMA' humans nace con un propósito fuerte, superior y visionario, enseñándole al SER a aceptar su luz y su sombra, a manejar sus emociones, llevando con responsabilidad mensajes positivos de inclusión y sostenibilidad. Todo lo que en KLMA ofrecemos está orientado por profesionales de la salud mental.</p>
        <p>Llevamos un mensaje disruptivo que busca conectar corazones ofreciendo un hombro donde apoyarse, como lo haría un amigo de verdad. Queremos que entiendas y vivas la felicidad como el estado natural del SER.</p>
        </div>

        <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>

        <div class="colum col-md-12 col-xs-12 aboutstoryTitle">
            <h1>WE ARE MADE IN</h1>
            <h2>COLOMBIA</h2>
        </div>

        <div class="row aboutbtn">
            <div class="mt-4">
                <button class="smooth"><img src="../assets/img/test/abajo.gif" alt=""></button>
            </div>
        </div>
    </div>

    <!-- Second About -->
    <Section class="scdabout">
        <!-- LOUNGEWEAR -->
        <div class="text-center aboutlines p-5">
            <div class="pb-3">
                <a href="../Rejillas_generales/loungewear.php">LOUNGEWEAR</a>
            </div>
            <div>
                <a href="../Rejillas_generales/loungewear.php"><img src="../assets/img/menushop/Loungewear.jpg" alt="LoungeWear bussiness line"></a>
            </div>
            <div class="pt-3 pb-3">
                <a href="../Rejillas_generales/loungewear.php">CONFORT</a>
                <a href="../Rejillas_generales/loungewear.php">DESIGN</a>
            </div>
            <div>
                <p>"ESTAR EN CASA"<br>La comodidad es la base para crear outfits creativos, funcionales y de bienestar. En esta línea sobresalen las prendas ligeras, los tejidos cálidos y los materiales y colores que nos regalan KLMA.</p>
            </div>
        </div>
        <!-- TRANSITION -->
        <div class="text-center aboutlines3 p-5">
            <div class="pb-3">
                <a href="../Rejillas_generales/Transition.php">TRANSITION</a>
            </div>
            <div>
                <a href="../Rejillas_generales/Transition.php"><img src="../assets/img/menushop/Transition.jpg" alt="Transition bussiness line"></a>
            </div>
            <div class="pt-3 pb-3">
                <a href="../Rejillas_generales/Transition.php">EMOTIONAL</a>
                <a href="../Rejillas_generales/Transition.php">DESIGN</a>
            </div>
            <div>
                <p>“LLEVA UNA EMOCIÓN CONTIGO”<br>En KLMA entendimos que las emociones son cíclicas, únicas, subjetivas y poderosas. Por eso esta línea se convierte en la más importante, la de mayor valor. Porque de forma integral con diseñadores, psicólogos y comunicadores creamos experiencias, vivencias y emociones a través de nuestras t-shirt. Atrévete a portar una emoción, romper paradigmas y vivir la experiencia KLMA.</p>
            </div>
        </div>
        <!-- CALMWEAR -->
        <div class="text-center aboutlines2 p-5">
            <div class="pb-3">
                <a href="../Rejillas_generales/calmwear.php">CALMWEAR</a>
            </div>
            <div>
                <a href="../Rejillas_generales/calmwear.php"><img src="../assets/img/menushop/Calmwear.jpg" alt="LoungeWear Calmwear line"></a>
            </div>
            <div class="pt-3 pb-3">
                <a href="../Rejillas_generales/calmwear.php">CALM</a>
                <a href="../Rejillas_generales/calmwear.php">DESIGN</a>
            </div>
            <div>
                <p>"PRODUCTOS PARA EL HOGAR Y EL DESCANSO"<br>Nuestra finalidad es que encuentres relajación, descanso y tranquilidad en tus espacios personales e íntimos. En esta línea fusionamos los 5 sentidos para crear elementos que nos ayuden a elevar tu bienestar.</p>
            </div>
        </div>
    </Section>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

<!-- scroll bar -->
<script>
   $(window).scroll(function(event) {
        var scrollTop = $(window).scrollTop()
        var Tamano = scrollTop / $('#scrollwrapabout').height();
        $('#scrollwrapabout').css('top', parseInt( Tamano ) +'px')
        
        console.log( Tamano );
        if( scrollTop >= 0 ){
            $('#scrollwrapabout').css('display', 'block')
            $('#scrollwrapabout').parent().css('display', 'block')
        } else if( scrollTop < 0 ){
            $('#scrollwrapabout').css('display', 'none')
            $('#scrollwrapabout').parent().css('display', 'none')
        }
    });
</script>
</body>
</html>

<?php include "../navbar_footer/footer.php" ?>
