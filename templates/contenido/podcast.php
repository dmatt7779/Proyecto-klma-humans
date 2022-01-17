<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PODCAST KLMA HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<?php
    $sentencia = $pdo->prepare("SELECT * FROM podcast where estado = 1");
    $sentencia -> execute();
    $listapodcast=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="container-fluid podcastgrid">
        <div class="row text-center">
            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[0]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[0]["imagen"]?>" alt="Imagen de reproductor spotify"></a>
            </div>

            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[1]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[1]["imagen"] ?>" alt="Imagen de reproductor spotify"></a>
            </div>

            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[2]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[2]["imagen"] ?>" alt="Imagen de reproductor spotify"></a>
            </div>

            <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>

            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[3]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[3]["imagen"] ?>" alt="Imagen de reproductor spotify"></a>
            </div>

            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[4]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[4]["imagen"] ?>" alt="Imagen de reproductor spotify"></a>
            </div>

            <div class="col-md-4 col-xs-12">
            <a href="<?php echo $listapodcast[5]["link"] ?>" target="_blank" rel="noopener noreferrer"><img src="../assets/img/<?php echo $listapodcast[5]["imagen"] ?>" alt="Imagen de reproductor spotify"></a>
            </div>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>
</body>
</html>

<?php include "../navbar_footer/footer.php"; ?>

