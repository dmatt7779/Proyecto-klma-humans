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

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<!-- --------------------------PRUEBA------------------------------------- -->

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
        $sentencia = $pdo->prepare("SELECT * FROM frases");
        $sentencia -> execute();
        $listafrases=$sentencia->fetchAll(PDO::FETCH_ASSOC);





    ?>


<!-- ---------------------------------------------------------------------------------------------- -->
<?php
    $blogsend = "";
?>
    <div class="container-fluid gridblog">
        <div class="row text-center mt-5">
        <?php foreach($listafrases as $frases) {  
            $blogsend = $frases['blog'];
            
            ?>
            <div class="col-md-4 col-xs-12 p-4" id="newblog">
                <div class="card-body mt-4 mb-4">
                    <h1 onclick= "idsend('<?php echo $blogsend ?>','<?php echo $frases['emocion'] ?>','<?php echo $frases['escritor'] ?>','<?php echo $frases['frase'] ?>')" class="blog-title"><?php echo $frases['emocion'] ?></h1><hr class="personalhr">
                    <p class="blog-text mt-3 mb-4">"<?php echo $frases['frase'] ?>"</p>
                    <a href="#" class="card-link"><h2 class="blog-title"><?php echo $frases['escritor'] ?></h2></a>
                </div>
            </div>
            <?php } ?>

            <div class="col-12" id="divisor-pod"><img src="../assets/img/podcast/linea_principal.png" alt=""></div>


        </div>
    </div>


    <form action="../contenido/public_blog.php" name="formblog" method="post">
    
            <input type="hidden" name="blog" id="blog">
            <input type="hidden" name="emocion" id="emocion">
            <input type="hidden" name="escritor" id="escritor">
            <input type="hidden" name="frase" id="frase">
            
    </form>

    <script>
        function idsend(blog,emocion,escritor,frase){
            
            document.getElementById('blog').value = blog;
            document.getElementById('emocion').value = emocion;
            document.getElementById('escritor').value = escritor;
            document.getElementById('frase').value = frase;

            document.formblog.submit();
        }
    </script>
    

<!-- JS, Popper.js, and jQuery -->

<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
<script src="../assets/librerias/popper.min.js"></script>
<script src="../assets/librerias/bootstrap.min.js"></script>
<script src="../assets/librerias/jquery-2.1.1.min.js"></script>

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