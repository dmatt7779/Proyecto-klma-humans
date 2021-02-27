<?php
session_start();
include "../../global/conexion.php";

$sentencia1 = $pdo->prepare("SELECT * FROM campañas 
ORDER by idcampañas DESC
LIMIT 1;");
$sentencia1->execute();
$campaña = $sentencia1->fetchAll(PDO::FETCH_ASSOC);


$campainselected = $campaña[0]['campaña'];

// consulta de ira
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'ira'");
$sentencia->execute();
$ira = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'amor'");
$sentencia->execute();
$amor = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de felicidad
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'felicidad'");
$sentencia->execute();
$felicidad = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de felicidad
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'miedo'");
$sentencia->execute();
$miedo = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de alegria
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'alegria'");
$sentencia->execute();
$alegria = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de tristeza
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where campaña = $campainselected and emocion = 'tristeza'");
$sentencia->execute();
$tristeza = $sentencia->fetchAll(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/librerias/flexboxgrid.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body>
    <!-- style="overflow: hidden;" -->
    <?php require "../navbar_footer/header.php"; ?>

    <!-- Scroll Bar personalizado -->
    <div id="scrollTrans">

        <div id="scrolltitletrans">TRANSITION</div>

        <!-- Track -->
        <div class="scrolllightbartrans">

            <!-- Thumbs -->
            <div class="scrollblocktrans">
            </div>
        </div>
    </div>

    <div class="containertl">
        <!-- GRID para figuras geometricas -->
        <div class="grid-view gridtlin">
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/rectangulo_transparent_1.gif" alt="prisma">
            </div>
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/cubo_transparent_1.gif" alt="cubo">
            </div>
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/piramide_transparent_1.gif" alt="piramide">
            </div>
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/cono_transparent_1.gif" alt="cono">
            </div>
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/sphere_transparent_1.gif" alt="esfera">
            </div>
            <div style="margin-bottom: 30%;" class="packet"><img src="../assets/img/prodgenerales/transition/cilindro_transparent_1.gif" alt="cilindro">
            </div>
        </div>

        <!-- GRID para productos con imagenes -->
        <div class="grid-view gridtl">

            <!-- ira -->
            <div class="tshirt"><img onclick="enviartransition(<?php echo $ira[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $ira[0]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt"><img onclick="enviartransition(<?php echo $miedo[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $miedo[0]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt"><img onclick="enviartransition(<?php echo $tristeza[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $tristeza[0]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt"><img onclick="enviartransition(<?php echo $alegria[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $alegria[0]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt"><img onclick="enviartransition(<?php echo $felicidad[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $felicidad[0]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt"><img onclick="enviartransition(<?php echo $amor[0]['id']; ?>)" src="../assets/img/prodgenerales/<?php echo $amor[0]['imagen']; ?>" alt="">
            </div>
            <!-- miedo -->


        </div>

        <form action="../Prod_especifico/especifico-transition.php" name="transition" method="post">
            <input type="hidden" name="id" id="idtrans">
        </form>



        <!-- Contenedor de los sentimientos rotados 90° -->
        <div class="containerfeel2">
            <div class="rotate">
                <span class="">IRA</span>
            </div>
            <div class="rotate">
                <span class="">MIEDO</span>
            </div>
            <div class="rotate">
                <span class="">TRISTEZA</span>
            </div>
            <div class="rotate">
                <span class="">ALEGRÍA</span>
            </div>
            <div class="rotate">
                <span class="">FELICIDAD</span>
            </div>
            <div class="rotate">
                <span class="">AMOR</span>
            </div>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../assets/js/new.js"></script>
    <script>
        function enviartransition(id) {


            document.getElementById('idtrans').value = id
            document.transition.submit();
        }
    </script>

</body>

</html>

<?php include "../navbar_footer/footer.php"; ?>