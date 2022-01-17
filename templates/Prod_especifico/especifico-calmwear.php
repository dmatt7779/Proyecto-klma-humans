<?php
include "../../global/conexion.php";
session_start();

$id = $_POST['idprod'];
if (empty($id)) {
    header("location:../Rejillas_generales/loungewear.php");
}

$sentencia = $pdo->prepare("SELECT * FROM productos where id = $id");
$sentencia->execute();
$producto = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$idempaque = $producto[0]['empaque'];
if ($idempaque != null || $idempaque != "") {

    $queryempaque = $pdo->prepare("SELECT * FROM productos where id = $idempaque");
    $queryempaque->execute();
    $empaque = $queryempaque->fetchAll(PDO::FETCH_ASSOC);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calmwear</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/style/style.css?v=<?php echo(rand()); ?>" />
</head>

<body>
    <?php require "../navbar_footer/header.php"; ?>

    <!-- Scroll Bar personalizado -->
    <div id="scrollcw">

        <div id="scrolltitlecw">CALMWEAR</div>

    </div>

    <form action="newcar.php" name="carrito" method="post">
        <input type="hidden" name="talla" id="talla" value="S">
        <input type="hidden" name="id" value="<?php echo $producto[0]['id'] ?>">
    </form>

    <form action="newcar.php" name="empaque" method="post">
        <input type="hidden" name="talla" value="S">
        <input type="hidden" name="id" value="<?php echo $empaque[0]['id'] ?>">
    </form>

    <!-- INICIO GRID PADRE -->
    <div class="mt-5">
        <div class="grid-cw mt-4">
            <!-- Carousel para imagenes de productos -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-product">
                    <div class="carousel-item active">
                        <img src="../assets/img/prodgenerales/<?php echo $producto[0]['imagen'] ?>" class="d-block w-100" alt="...">
                    </div>

                    <?php
                    if ($idempaque != null || $idempaque != "") {
                        $carrusel = explode(',', $producto[0]['carrusel']);


                        for ($i = 0; $i < count($carrusel); $i++) {

                    ?>
                            <div class="carousel-item">
                                <img src="../assets/img/<?php echo $carrusel[$i] ?>" class="d-block w-100" alt="...">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <!--FIN Carousel-->

            <!-- GRID Anidado -->
            <div class="nested-grid-cw">
                <div class="font-lw-1 elemento1cw">
                    <p class="refer">SOFT</p>
                    <p class="refercl"><?php echo $producto[0]['codigo'] ?></p>
                    <p class="refer">CALM</p>
                    <p class="refer">DESIGN</p>
                </div>

                <div class="font-lw-1 elemento1-5cw">
                    <p class="materialstitle">MATERIALES</p>
                    <div class="materials">
                        <div><img src="../assets/img/prodgenerales/prod_esp/<?php echo $producto[0]['imagenmaterial1'] ?>" alt=""></div>
                        <div><img src="../assets/img/prodgenerales/prod_esp/<?php echo $producto[0]['imagenmaterial2'] ?>" alt=""></div>
                    </div>
                </div>

                <!-- Precio -->
                <!-- Precio -->
            <div class="elemento2cw">
                <p class="font-price-cw">$<?php echo number_format($producto[0]['precio_compra']) ?></p>
            </div>

                <!--  Seleccionador de Tallas -->
                <div class="elemento3cw"></div>
            </div><!-- FIN GRID Anidado -->
        </div><!-- FIN GRID PADRE -->


        <!--Descripción del producto bajo el carousel-->
        <div class="body-card">
            <p class="desc-prod-espec"><?php echo $producto[0]['frase'] ?></p>
        </div>

        <!--Botones Opciones para mostrar contenedores hidden-->
        <div class="divopcionescw">
            <!-- Contenedor de VER DETALLES -->
            <div class="btn-opcionescw">
                <div class="contentdetailscw" id="divDetalle" hidden>
                    <p class="refer-details"><?php echo $producto[0]['historia'] ?></p>
                </div>
                <!-- Boton VER DETALLES -->
                <button id="btn-details-prod" class="btn-details-prod" name="bntOpcionescw" data-target="divDetalle">VER DETALLES</button>
            </div>

            <!-- Boton para ver MODAL -->
            <div class="btn-opcionescw">
                <button type="button" class="btn-verproduct" name="bntOpcionescw">DESIGN BY <?php echo $producto[0]['diseñador'] ?></button>
            </div>

            <!-- Botón EMPAQUE ESPECIAL -->
            <div class="btn-opcionescw">
                <div class="contentbagcw" id="divEmpaque" hidden>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/img/prodgenerales/prod_esp/calmwear/bolso.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <p class="refer-specialbag"><?php echo $empaque[0]['nombre'] ?></p>
                    <p class="refer-specialbag"><?php echo $empaque[0]['descripcion'] ?></p>
                    <p class="refer-specialbag"><?php echo number_format($empaque[0]['precio_compra']) ?></p>
                </div>
                <?php if ($idempaque != null) { ?>
                    <button id="btn-chance" class="btn-empaque" name="bntOpcionescw" data-target="divEmpaque"><span class="empaque">EMPAQUE</span><br><span class="especial">ESPECIAL</span></button>

                    <!-- INPUT PERSONALIZADO -->
                    <label class="custom-radio-checkbox">
                        <!-- Input oculto -->
                        <input onclick="enviar_empaque();" class="custom-radio-checkbox__input" type="radio" name="empaque" value="empaquesi">
                        <!-- Imagen en sustitucion -->
                        <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
                    </label>
                <?php } ?>
            </div>


            <!-- Buy It Now -->

            <div class="btn-opcionescw">
                <!-- Botones Agregar y comprar ahora -->
                <div class="elemento4">
                    <a href="#" onclick="enviar_carro();" class="btn btn-submit" id="aAddCart">ADD TO CART</a>
                    <a href="#" class="btn btn-submit">BUY IT NOW</a>
                </div>
            </div>
        </div><!-- FIN Contenedores hidden -->
    </div>


    <!-- FIN Carrito de compras -->

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        function enviar_empaque() {

            document.empaque.submit()
        }


        function enviar_carro() {

            document.carrito.submit()


        }
    </script>

    <!-- Script para ocultar obejtos HTML -->
    <script>
        $('button[name="bntOpcionescw"]').click(function() {
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

    <!-- Scrip para mostrar y ocultar carrito de compras -->
    <script>
        $('#btnCart, #aAddCart').click(function() {
            $('#divCart').css('visibility', 'visible')
        });
        $('#closecart').click(function() {
            $('#divCart').css('visibility', 'hidden')
        });
    </script>

    <script src="../assets/js/carrito.js"></script>
</body>

</html>

<?php include "../navbar_footer/footer.php"; ?>