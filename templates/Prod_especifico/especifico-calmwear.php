<?php     
    include "../../global/conexion.php";
        
/*     session_start();

        $id = $_POST['id'];
        
        $sentencia = $pdo->prepare("SELECT * FROM productos where id = $id");
        $sentencia -> execute();
        $producto=$sentencia->fetchAll(PDO::FETCH_ASSOC); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Especifico - CW</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<?php require "../navbar_footer/header.php"; ?>

<!-- Scroll Bar personalizado -->
<div id="scrollcw">

    <div id="scrolltitlecw">CALMWEAR</div>

    <!-- Track -->
    <div class="scrolllightbarcw">

    <!-- Thumbs -->
        <div class="scrollblockcw">
        </div>
    </div>
</div>

<!-- INICIO GRID PADRE -->
<div class="mt-5">
    <div class="grid-cw mt-4">
        <!-- Carousel para imagenes de productos -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-product">
                <div class="carousel-item active">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/productomat.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto00.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto01.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto02.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto03.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto04.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto05.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/calmwear/producto06.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!--FIN Carousel-->

        <!-- GRID Anidado -->
        <div class="nested-grid-cw">
            <div class="font-lw-1 elemento1cw">
                    <p class="refer">SOFT</p>
                    <p class="refer">REF C1/315-01</p>
                    <p class="refer">COMFORT</p>
                    <p class="refer">DESIGN</p>
            </div>

            <div class="font-lw-1 elemento1-5cw">
                <p class="materialstitle">MATERIALES</p>
                <div class="materials">
                    <div><img src="../assets/img/prodgenerales/prod_esp/calmwear/material02.png" alt=""></div>
                    <div><img src="../assets/img/prodgenerales/prod_esp/calmwear/material01.png" alt=""></div>
                </div>
            </div>

            <!-- Precio -->
            <div class="elemento2cw">
                <p class="font-price-cw">$118.000</p>
            </div>

            <!--  Seleccionador de Tallas -->
            <div class="elemento3cw"></div>
        </div><!-- FIN GRID Anidado -->
    </div><!-- FIN GRID PADRE -->
        

    <!--Descripción del producto bajo el carousel-->
    <div class="body-card">
        <p class="desc-prod-espec">EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.</p>
    </div>

    <!--Botones Opciones para mostrar contenedores hidden-->
    <div class="divopcionescw">
        <!-- Contenedor de VER DETALLES -->
        <div class="btn-opcionescw">
            <div class="contentdetailscw" id="divDetalle" hidden>
                <p class="refer-details">ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED</p>
                <p class="refer-details">SU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL</p>
                <p class="refer-details">MADE IN COLOMBIA</p>
            </div>
            <!-- Boton VER DETALLES -->
            <button id="btn-details-prod" class="btn-details-prod" name="bntOpcionescw" data-target="divDetalle">VER DETALLES</button>
        </div>

        <!-- Boton para ver MODAL -->
        <div class="btn-opcionescw">
            <button type="button" class="btn-verproduct" name="bntOpcionescw">DESIGN BY HUMANOIDE</button>
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
                    <p class="refer-specialbag">CALM DRESS</p>
                    <p class="refer-specialbag">CHOMPA MANGA CORTA</p>
                    <p class="refer-specialbag">$20.000</p>
                </div>
            <button id="btn-chance" class="btn-empaque" name="bntOpcionescw" data-target="divEmpaque"><span class="empaque">EMPAQUE</span><br><span class="especial">ESPECIAL</span></button>
            
            <!-- INPUT PERSONALIZADO -->
            <label class="custom-radio-checkbox">
                <!-- Input oculto -->
                <input class="custom-radio-checkbox__input" type="radio" name="empaque" value="empaquesi" >
                <!-- Imagen en sustitucion -->
                <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
            </label>
        </div>


        <!-- Buy It Now -->

        <div class="btn-opcionescw">
            <!-- Botones Agregar y comprar ahora -->
            <div class="elemento4">
                <a href="#" class="btn btn-submit" id="aAddCart">ADD TO CART</a>
                <a href="#" class="btn btn-submit">BUY IT NOW</a>
            </div>
        </div>
    </div><!-- FIN Contenedores hidden -->
</div>

    <!-- INICIO Carrito de compras -->
    <div class="cart-overlay" id="divCart">
        <div class="cart">
            <span class="close-cart">
                <i class="fas fa-times" id="closecart"></i>
            </span>
            <h1>RESUMEN</h1>

            <div class="cart-content">
                <!-- Cart items -->
                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span>-</span><p class="item-amount mb-4">&nbsp &nbsp1&nbsp &nbsp</p><span>+</span>
                        </div>
                        <h2>COMERCIAL BAG</h2>
                        <span class="cart-size">CIRCLE</span>
                        <h3>$15.000</h3>
                        <!-- <span class="remove-item">remove</span> -->
                    </div>
                    <img src="../assets/img/bolso.png" alt="">
                </div>

                <div class="cart-item">
                    <div class="data-item">
                        <div class="plus-minus">
                            <span>-</span><p class="item-amount mb-4">&nbsp &nbsp1&nbsp &nbsp</p><span>+</span>
                        </div>
                        <h2>COMERCIAL BAG</h2>
                        <span class="cart-size">CIRCLE</span>
                        <h3>$15.000</h3>
                        <!-- <span class="remove-item">remove</span> -->
                    </div>
                    <img src="../assets/img/John_Elliott.jpg" alt="">
                </div>
                <!-- FIN Cart items -->
            </div>

            <!-- INICIO Cart footer -->
            <div class="cart-footer">
                <div class="subtotal">
                <h3>SUBTOTAL:</h3>
                <span class="cart-total">$0</span>
                </div>
                <p>EL COSTO DE ENVIO SERÁ VISIBLE EN EL PROCESO DE PAGO</p>
                <p>ACEPTO LOS TERMINOS Y CONDICIONES</p>
                    <div class="finalshop">
                        <button class="btn btn-submit">FINALIZAR PEDIDO</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- FIN Carrito de compras -->

<!-- JS, Popper.js, and jQuery -->
<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Script para ocultar obejtos HTML -->
<script>

  $('button[name="bntOpcionescw"]').click(function(){
     var 
        Target = $(this).attr('data-target'),
        Elemento = $('#'+Target),
        Atributo = $('#'+Target).attr('hidden')

        if( Atributo !== false && typeof Atributo !== 'undefined' ){
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
    $("#btn-chance").click(function(){
    $(this).toggleClass("btn-empaque btn-empaque2");
    });

    //Boton para ver detalles
    $("#btn-details-prod").click(function(){
    $(this).toggleClass("btn-details-prod btn-details-prod2");
    });

    //Boton para ver tallas
    $("#btn-size").click(function(){
    $(this).toggleClass("btn-size btn-size2");
    });
</script>

<!-- Scrip para mostrar y ocultar carrito de compras -->
<script>
    $('#btnCart, #aAddCart').click( function(){ $('#divCart').css( 'visibility', 'visible' ) } );
    $('#closecart').click( function(){ $('#divCart').css('visibility', 'hidden')});
</script>

<script src="../assets/js/carrito.js"></script>
</body>
</html>

<?php include "../navbar_footer/footer.php";?>