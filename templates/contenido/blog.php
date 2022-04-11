<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG KLMA HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>
    <?php include "../navbar_footer/header.php"; ?>

    <!-- -------------- SCROLL BAR ------------------------------ -->

    <div id="scrollblog">

        <div id="scrolltitleblog">BLOG</div>

        <!-- Track -->
        <div class="scrolllightbar">

            <!-- Thumbs -->
            <div id="scrollwrap" class="scrollblock">
            </div>
        </div>
    </div>

    <?php
    $sentencia = $pdo->prepare("SELECT * FROM frases WHERE habilitado = 1");
    $sentencia->execute();
    $frases = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container-fluid gridblog">
        <div class="row text-center mt-5">
            <!-- blog 1 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[0]['blog']));
            ?>
            
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[0]['id']?>')" class="blog-title"><?php echo $frases[0]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[0]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[0]['escritor'] ?></h2>
                    </a>
                </div>
            </div>
            <!-- blog 2 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[1]['blog']));
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[1]['id']?>')" class="blog-title"><?php echo $frases[1]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[1]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[1]['escritor'] ?></h2>
                    </a>
                </div>
            </div>
            <!-- blog 3 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[2]['blog']));
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[2]['id']?>')" class="blog-title"><?php echo $frases[2]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[2]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[2]['escritor'] ?></h2>
                    </a>
                </div>
            </div>

            <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>
            <!-- blog 4 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[3]['blog']));
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[3]['id']?>')" class="blog-title"><?php echo $frases[3]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[3]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[3]['escritor'] ?></h2>
                    </a>
                </div>
            </div>

            <!-- blog 5 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[4]['blog']));
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[4]['id']?>')" class="blog-title"><?php echo $frases[4]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[4]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[4]['escritor'] ?></h2>
                    </a>
                </div>
            </div>
           
            <!-- blog 6 -->
            <?php
                $_Blog = trim(preg_replace('/\r\n/', '@', $frases[5]['blog']));
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick="idsend('<?php echo $frases[5]['id']?>')" class="blog-title"><?php echo $frases[5]['emocion'] ?></h1>
                    <hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases[5]['frase'] ?>"</p>
                    <a href="#" class="card-link">
                        <h2 class="blog-title"><?php echo $frases[5]['escritor'] ?></h2>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <form action="public_blog.php" name="formblog" method="get">
        <input type="hidden" name="id" id="id">
    </form>

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

    <script>
        function idsend(id) {
            // debugger;

            document.getElementById('id').value = id;

            document.formblog.submit();
        }
    </script>

    <!-- scroll bar -->
    <script>
        $(window).scroll(function(event) {
            var scrollTop = $(window).scrollTop()
            $('#scrollwrap').css('top', scrollTop + 'px')

            if (scrollTop >= 260) {
                $('#scrollwrap').css('display', 'none')
                $('#scrollwrap').parent().css('display', 'none')
            } else if (scrollTop >= 0) {
                $('#scrollwrap').css('display', 'block')
                $('#scrollwrap').parent().css('display', 'block')
            } else if (scrollTop < 0) {
                $('#scrollwrap').css('display', 'none')
                $('#scrollwrap').parent().css('display', 'none')
            }
        });
    </script>
</body>

</html>

<?php include "../navbar_footer/footer.php"; ?>