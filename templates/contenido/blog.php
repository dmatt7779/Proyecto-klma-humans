<?php
session_start();
include "../../global/config.php";
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PODCAST KLMA HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<?php include "../navbar_footer/header.php";?>

    <div class="container-fluid gridblog">
        <div class="row text-center mt-4">

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">AMOR</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"LA ALEGRÍA Y EL AMOR SON DOS ALAS PARA LAS GRANDES ACCIONES"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">GOETHE</h2></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">FELICIDAD</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"LA FELICIDAD ES LA CERTEZA DE NO SENTIRSE PERDIDO"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">JORGE BUCAY</h2></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">ALEGRÍA</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"LA PRUEBA MÀS CLARA DE SABIDURÍA ES UNA ALEGRÍA CONTINUA"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">MONTAIGNE</h2></a>
                </div>
            </div>

            <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">IRA</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"EL QUE DE LA IRA SE DEJA VENCER SE EXPONE A PERDER"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">PROVERBIO</h2></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">MIEDO</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"DEJAMOS DE TEMER A AQUELLO QUE SE HA APRENDIDO A ENTENDER"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">MARIE CURIE</h2></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 class="blog-title">TRISTEZA</h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"UN SANTO TRISTE ES UN TRISTE SANTO"</p>
                    <a href="#" class="card-link"><h2 class="blog-title">FRANCISCO DE SALES</h2></a>
                </div>
            </div>

        </div>
    </div>
    

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>

<?php include "../navbar_footer/scd_footer.php"; ?>