<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body id="dotsmenubody">
<?php require "../navbar_footer/header.php";?>

    <div class="contenmenub">
        <!-- Menu en tarjetas -->
        <div class="mainb">
            <div class="menub">
                <div class="loungewear">
                    <a class="mt-1" href="../Rejillas_generales/loungewear.php" style="letter-spacing: .4em"><img src="../assets/img/menushop/Loungewear.jpg" alt="logo shop shop"></a>
                    <a href="../Rejillas_generales/loungewear.php">LOUNGEWEAR</a>
                </div>

                <div class="calmwear">
                    <a href="../Rejillas_generales/calmwear.php" style="letter-spacing: .7em"><img src="../assets/img/menushop/Calmwear.jpg" alt="logo shop shop"></a>
                    <a href="../Rejillas_generales/calmwear.php">CALMWEAR</a>
                </div>

                <div class="transition">
                    <a href="../Rejillas_generales/Transition.php" style="letter-spacing: .5em"><img src="../assets/img/menushop/Transition.jpg" alt="logo shop shop"></a>
                    <a href="../Rejillas_generales/Transition.php">TRANSITION</a>
                </div>

                <!-- Menu derecha -->
                <div class="bnav mr-5">
                    <ul class="btnav">
                        <ol class="p-1"><a href="about.php">ABOUT</a></ol>
                        <ol class="p-1"><a href="../test/test.php">TEST</a></ol>
                        <ol class="p-1"><a href="h0m3.php#emociones">EMOCIONES</a></ol>
                        <ol class="p-1"><a href="../contenido/podcast.php">PODCAST</a></ol>
                        <ol class="p-1"><a href="../contenido/blog.php">BLOG</a></ol>
                        <ol class="p-1"><a href="../contenido/contact.php">CONTÁCTO</a></ol>
                    </ul>
                </div>
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