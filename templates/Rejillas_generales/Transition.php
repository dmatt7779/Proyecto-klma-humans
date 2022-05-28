<?php
session_start();
include "../../global/conexion.php";

// consulta de amor
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'amor'");
$sentencia->execute();
$amor = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de felicidad
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'felicidad'");
$sentencia->execute();
$felicidad = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de felicidad
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'miedo'");
$sentencia->execute();
$miedo = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de alegria
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'alegria'");
$sentencia->execute();
$alegria = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de tristeza
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'tristeza'");
$sentencia -> execute();
$tristeza=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// consulta de ira
$sentencia = $pdo->prepare("SELECT id,imagen FROM productos where tipologia_id = 3 and habilitado = 1 and emocion = 'ira'");
$sentencia -> execute();
$ira=$sentencia->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transition KLMA' HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/librerias/flexboxgrid.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body>
    <?php require "../navbar_footer/dark_header.php"; ?>

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
            <div class="packet"><img src="../assets/img/prodgenerales/transition/rectangulo_transparent_1.gif" alt="prisma">
            </div>
            <div class="packet"><img src="../assets/img/prodgenerales/transition/cubo_transparent_1.gif" alt="cubo">
            </div>
            <div class="packet"><img src="../assets/img/prodgenerales/transition/piramide_transparent_1.gif" alt="piramide">
            </div>
            <div class="packet"><img src="../assets/img/prodgenerales/transition/cono_transparent_1.gif" alt="cono">
            </div>
            <div class="packet"><img src="../assets/img/prodgenerales/transition/sphere_transparent_1.gif" alt="esfera">
            </div>
            <div class="packet"><img src="../assets/img/prodgenerales/transition/cilindro_transparent_1.gif" alt="cilindro">
            </div>
        </div>

        <!-- GRID para productos con imagenes -->
        <div class="grid-view gridtl">
        <?php
        for ($i = 0; $i < count($ira); $i++) 
        {
        ?>
            <!-- li -->
            <div class="tshirt" onclick="enviartransition(<?php echo $ira[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $ira[$i]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt" onclick="enviartransition(<?php echo $miedo[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $miedo[$i]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt" onclick="enviartransition(<?php echo $tristeza[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $tristeza[$i]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt" onclick="enviartransition(<?php echo $alegria[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $alegria[$i]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt" onclick="enviartransition(<?php echo $felicidad[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $felicidad[$i]['imagen']; ?>" alt="">
            </div>
            <div class="tshirt" onclick="enviartransition(<?php echo $amor[$i]['id']; ?>)"><img src="../assets/img/prodgenerales/<?php echo $amor[$i]['imagen']; ?>" alt="">
            </div>

            <?php
        }
        ?>           
            
        </div>

        <form action="../Prod_especifico/especifico-transition.php" name="transition" method="post">
            <input type="hidden" name="id" id="idtrans">
        </form>

      

        <!-- Contenedor de los sentimientos rotados 90° -->
        <div class="containerfeel2">
            <div class="rotate">
                <span onclick="location.href='../emociones/ira.php'" class="">IRA</span>
            </div>
            <div class="rotate">
                <span onclick="location.href='../emociones/miedo.php'" class="">MIEDO</span>
            </div>
            <div class="rotate">
                <span onclick="location.href='../emociones/tristeza.php'" class="">TRISTEZA</span>
            </div>
            <div class="rotate">
                <span onclick="location.href='../emociones/alegria.php'" class="">ALEGRÍA</span>
            </div>
            <div class="rotate">
                <span onclick="location.href='../emociones/felicidad.php'" class="">FELICIDAD</span>
            </div>
            <div class="rotate">
                <span onclick="location.href='../emociones/amor.php'" class="">AMOR</span>
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
            function enviartransition(id){

                
                document.getElementById('idtrans').value = id
                document.transition.submit();
            }
        </script>

</body>

</html>

<?php include "../navbar_footer/footer.php"; ?>