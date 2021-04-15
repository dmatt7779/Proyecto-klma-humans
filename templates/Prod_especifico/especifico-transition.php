<?php
include "../../global/conexion.php";
session_start();

$id = $_POST['id'];

$sentencia = $pdo->prepare("SELECT * FROM productos where id = $id");
$sentencia->execute();
$producto = $sentencia->fetchAll(PDO::FETCH_ASSOC);


$idempaque = $producto[0]['empaque'];

$queryempaque = $pdo->prepare("SELECT * FROM productos where id = $idempaque");
$queryempaque->execute();
$empaque = $queryempaque->fetchAll(PDO::FETCH_ASSOC);
?>

<script>
    console.log(<?php echo $id ?>)
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Especifico - TR</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <?php require "../navbar_footer/header.php"; ?>

    <!-- Scroll Bar personalizado -->
    <div id="scrolltr">

        <div id="scrolltitletr">TRANSITION</div>

    </div>

    <!-- INICIO GRID PADRE -->
    <div class="mt-5 ">
        <div class="grid-lw mt-4">
            <!-- Carousel para imagenes de productos -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-product">


                    <div class="carousel-item active">
                        <img src="../assets/img/prodgenerales/<?php echo $producto[0]['imagen']  ?>" class="d-block w-100" alt="...">
                    </div>

                    <?php

                    $carrusel = explode(',', $producto[0]['carrusel']);


                    for ($i = 0; $i < count($carrusel); $i++) {

                    ?>
                        <div class="carousel-item">
                            <img src="../assets/img/<?php echo $carrusel[$i] ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!--FIN Carousel-->

            <!-- GRID Anidado -->
            <div class="nested-grid-cw">
                <div class="font-lw-1 elemento1cw">
                    <p class="refertr">T-SHIRT GALERY</p>
                    <p class="refertr"><?php echo $producto[0]['codigo']  ?></p>
                    <p class="refertr">EMOTIONAL</p>
                    <p class="refertr">DESIGN</p>
                </div>

                <div class="font-lw-1 elemento1-5tr">
                    <p class="titleSexo">SEXO</p>
                    <div class="typeselector">
                        <div><img onclick="genero('f')" id="femenino" src="../assets/img/prodgenerales/prod_esp/transition/Sexo_Femenino.jpg" alt=""></div>
                        <div><img onclick="genero('m')"  id="masculino" src="../assets/img/prodgenerales/prod_esp/transition/Sexo_Masculino_2.jpg" alt=""></div>
                    </div>
                </div>

                <div class="font-lw-1 elemento1-5tr">
                    <p class="titleManga">MANGA</p>
                    <div class="typeselector">
                        <div id="m-sisa"><img onclick="manga('S')"  src="../assets/img/prodgenerales/prod_esp/transition/manga-sisa.png" alt="" class="selectdotted"></div>
                        <div id="m-ranglan"><img onclick="manga('R')"  src="../assets/img/prodgenerales/prod_esp/transition/manga-ranglan.png" alt=""></div>
                    </div>
                </div>

                <!-- Precio -->
                <div class="elemento2cw">
                    <p class="font-price-cw">$<?php echo number_format($producto[0]['precio_venta'])  ?></p>
                </div>

                <!--  Seleccionador de Tallas -->
                <div class="elemento3" id="divTalla">
                    <div onclick="talla('s');" class="aTalla contenedor-tallas-lw talla-active">S</div>
                    <div onclick="talla('m');" class="aTalla contenedor-tallas-lw">M</div>
                    <div onclick="talla('l');" class="aTalla contenedor-tallas-lw">L</div>
                    <div onclick="talla('xl');" class="aTalla contenedor-tallas-lw">XL</div>
                </div>
            </div><!-- FIN GRID Anidado -->
        </div><!-- FIN GRID PADRE -->

        <form action="newcar2.php" method="post" name="transition">
            <input type="hidden" name="id" id="id" value="<?php echo $producto[0]['id'] ?>">
            <input type="hidden" name="talla" id="talla" value="S">
            <input type="hidden" name="genero" id="genero" value="Femenino">
            <input type="hidden" name="manga" id="manga">
        </form>

        <form action="newcar.php" name="empaque" method="post">
            <input type="hidden" name="talla" value="S">
            <input type="hidden" name="id" value="<?php echo $empaque[0]['id'] ?>">
        </form>
        <!--Descripción del producto bajo el carousel-->
        <div class="body-card">
            <p class="desc-prod-espec"><?php echo $producto[0]['frase']  ?></p>
        </div>

        <!--Botones Opciones para mostrar contenedores hidden-->
        <div class="divopcionestr">
            <!-- Contenedor de VER DETALLES -->
            <div class="btn-opcionestr">
                <div class="contentdetailstr" id="divDetalle" hidden>
                    <p class="refer-details"> <?php echo $producto[0]['historia']  ?></p>

                </div>
                <!-- Boton VER DETALLES -->
                <button id="btn-details-prod" class="btn-details-prod" name="bntOpcionestr" data-target="divDetalle">VER DETALLES</button>
            </div>

            <!-- Boton para ver MODAL -->
            <div class="btn-opcionestr">
                <button type="button" class="btn-verproduct" name="bntOpcionestr">DESIGN BY <?php echo $producto[0]['diseñador']  ?></button>
            </div>

            <!-- Botón EMPAQUE ESPECIAL -->
            <div class="btn-opcionestr">
                <div class="contentbagtr" id="divEmpaque" hidden>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

                        <div class="carousel-innertr carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/img/prodgenerales/<?php echo $empaque[0]['imagen'] ?>" class="d-block w-100" alt="...">

                            </div>
                        </div>
                    </div>
                    <p class="refer-specialbag"><?php echo $empaque[0]['nombre'] ?></p>
                    <p class="refer-specialbag"><?php echo $empaque[0]['descripcion'] ?></p>
                    <p class="refer-specialbag"><?php echo number_format($empaque[0]['precio_compra']) ?></p>
                </div>
                <button id="btn-chance" class="btn-empaque" name="bntOpcionestr" data-target="divEmpaque"><span class="empaque">EMPAQUE</span><br><span class="especial">ESPECIAL</span></button>

                <!-- INPUT PERSONALIZADO -->
                <label class="custom-radio-checkbox">
                    <!-- Input oculto -->
                    <input onclick="enviar_empaque()" class="custom-radio-checkbox__input" type="radio" name="empaque" value="empaquesi">
                    <!-- Imagen en sustitucion -->
                    <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
                </label>
            </div>


            <!-- Buy It Now -->

            <div class="btn-opcionestr">
                <!-- Botones Agregar y comprar ahora -->
                <div class="elemento4">
                    <div class="btn-opcionestr">
                        <div class="contentsize mac-contentsize" id="divSize" hidden>
                            <img id="btnSizes" class="d-block w-100" src="../assets/img/prodgenerales/prod_esp/transition/iciclenatural.jpg" alt="">
                            <p class="choicesize mt-3">SELECCIONAR TALLA</p>
                            <div class="btn-sizes2">
                                <button id="sizeS" class="btn-change">S</button>
                                <button id="sizeM" class="btn-change">M</button>
                                <button id="sizeL" class="btn-change">L</button>
                                <button id="sizeXL" class="btn-change">XL</button>
                            </div>
                        </div>
                    </div>
                    <button id="btn-size" class="btn-size" name="bntOpcionestr" data-target="divSize">TALLAS</button>
                </div>
                <a href="#" class="btn btn-submit" id="aAddCart" onclick="submit()">ADD TO CART</a>
                <a href="#" class="btn btn-submit">BUY IT NOW</a>
            </div>
        </div><!-- FIN Contenedores hidden -->
    </div>
    <!-- FIN Carrito de compras -->

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>

    <script>
        function submit() {
            document.transition.submit()
        }

        function enviar_empaque() {

            document.empaque.submit()
        }
    </script>

    <script>
        function talla(t) {

            switch (t.toUpperCase()) {
                case "S":
                    document.getElementById("talla").value = "S";

                    break;

                case "M":
                    document.getElementById("talla").value = "M";


                    break;
                case "L":
                    document.getElementById("talla").value = "L";


                    break;
                case "XL":
                    document.getElementById("talla").value = "XL";


                    break;
                default:
                    console.log("nothing");
                    break;
            }

        }


        function genero(t) {

            if (t == "f") {

                document.getElementById("genero").value = "FEMENINO";


            } else if(t=="m") {

                document.getElementById("genero").value = "MASCULINO";

            }

        }

        function manga(m) {
            

            if (m == "R") {

                document.getElementById("manga").value = "RANGLAN";


            } else if(m == "S") {

                document.getElementById("manga").value = "SISA";

            }




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

    <!-- Script para ocultar obejtos HTML -->
    <script>
        $('button[name="bntOpcionestr"]').click(function() {
            var
                Target = $(this).attr('data-target'),
                Elemento = $('#' + Target),
                Atributo = $('#' + Target).attr('hidden')

            if (Atributo !== false && typeof Atributo !== 'undefined') {
                Elemento.removeAttr('hidden')
            } else {
                console.log('YeaH!')
                Elemento.attr('hidden', true)
            }
        });
    </script>

    <!-- Script para cambiar botones de color White to Black -->
    <script>
        //Boton para ver Empaque Especial
        $("#btn-chance").click(function() {
            $(this).toggleClass("btn-empaque btn-empaque2");
        });

        //Boton para ver detalles
        $("#btn-details-prod").click(function() {
            $(this).toggleClass("btn-details-prod btn-details-prod2");
        });

        //Boton para ver tallas
        $("#btn-size").click(function() {
            $(this).toggleClass("btn-size btn-size2");
        });
    </script>

    <!-- Script para seleccionar tallas -->
    <script type="text/javascript">
        $('#divTalla').find('.aTalla').click(function() {
            $('.aTalla').removeClass('talla-active');
            $(this).addClass('talla-active');
        })
    </script>

    <!-- Script para mostrar y ocultar carrito de compras -->
    <script>
        $('#btnCart, #aAddCart').click(function() {
            $('#divCart').css('visibility', 'visible')
        });
        $('#closecart').click(function() {
            $('#divCart').css('visibility', 'hidden')
        });
    </script>

    <!-- Seleccion de SEXO -->
    <script>
        var Ruta = "../assets/img/prodgenerales/prod_esp/transition/";

        $(document).on('click', '#femenino', function() {
            $(this).attr('src', Ruta + 'Sexo_Femenino.jpg');
            $('#masculino').attr('src', Ruta + 'Sexo_Masculino_2.jpg ');
        })

        $(document).on('click', '#masculino', function() {
            $(this).attr('src', Ruta + 'Sexo_Masculino.jpg');
            $('#femenino').attr('src', Ruta + 'Sexo_Femenino_2.jpg ');
        })
    </script>

    <!-- Seleccionar Manga -->
    <script>
        $(document).on('click', '#m-sisa', function() {
            $('#m-sisa').addClass('selectdotted');
            $('#m-ranglan').removeClass('selectdotted');
        })

        $(document).on('click', '#m-ranglan', function() {
            $('#m-ranglan').addClass('selectdotted');
            $('#m-sisa').removeClass('selectdotted');
        })
    </script>
    <script src="../assets/js/carrito.js"></script>

        <!-- TALLAS BOTONES BLACK CONTAINER -->
<script>
    let routesizes = "../assets/img/prodgenerales/prod_esp/loungewear/"

    $('#sizeS').click(function(){
        $('#btnSizes').attr( 'src', routesizes + 'iciclenatural.jpg');
    }) 
    $('#sizeM').click(function(){
        $('#btnSizes').attr( 'src', routesizes + 'btnsizes.jpg');
    }) 
    $('#sizeL').click(function(){
        $('#btnSizes').attr( 'src', routesizes + 'iciclenatural.jpg');
    }) 
    $('#sizeXL').click(function(){
        $('#btnSizes').attr( 'src', routesizes + 'btnsizes.jpg');
    });
</script>
</body>
</html>

<?php include "../navbar_footer/footer.php"; ?>