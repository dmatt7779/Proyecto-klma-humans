<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Especifico - LW</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    
<!-- INICIO GRID PADRE -->
<div>
    <div class="grid-lw mt-4">
        <!-- Carousel para imagenes de productos -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-product">
                <div class="carousel-item active">
                    <img src="../assets/img/producto00.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto01.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto02.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto03.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto04.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto05.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/producto06.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!--FIN Carousel-->

        <!-- GRID Anidado -->
        <div class="nested-grid-lw">
            <div class="font-lw-1 elemento1">
                    <p class="refer">SOFT</p>
                    <p class="refer">REF C1/315-01</p>
                    <p class="refer">COMFORT</p>
                    <p class="refer">DESIGN</p>
            </div>

            <!-- Precio -->
            <div class="elemento2">
                <p class="font-price-lw">$118.000</p>
            </div>

            <!--  Seleccionador de Tallas -->
            <div class="elemento3" id="divTalla">
                <div class="aTalla contenedor-tallas-lw">S</div>
                <div class="aTalla contenedor-tallas-lw">M</div>
                <div class="aTalla contenedor-tallas-lw">L</div>
                <div class="aTalla contenedor-tallas-lw">XL</div>
            </div>
        </div><!-- FIN GRID Anidado -->
    </div><!-- FIN GRID PADRE -->
        

    <!--Descripción del producto bajo el carousel-->
    <div class="body-card">
        <p class="desc-prod-espec">EL LUGAR DONDE RESIDE EL MAYOR DE TUS MIEDOS ES A LA VEZ EL RINCÓN DONDE ENCUENTRAS TU MAYOR OPORTUNIDAD.</p>
    </div>

    <!--Botones Opciones para mostrar contenedores hidden-->
    <div class="divopciones">
        <!-- Contenedor de VER DETALLES -->
        <div class="btn-opciones">
            <div class="contentdetails" id="divDetalle" hidden>
                <p class="refer-details">ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED</p>
                <p class="refer-details">SU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL</p>
                <p class="refer-details">MADE IN COLOMBIA</p>
            </div>
            <!-- Boton VER DETALLES -->
            <button id="btn-details-prod" class="btn-details-prod" name="bntOpciones" data-target="divDetalle">VER DETALLES</button>
        </div>

        <!-- Boton para ver MODAL -->
        <div class="btn-opciones">
            <button type="button" class="btn-verproduct" name="bntOpciones" data-toggle="modal" data-target="#Modal1">VER PRODUCTO</button>

                <!-- Modal para visualizar fotos de producto-->
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modalcontent">
                <div class="modalbody">
                        
                        
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/img/producto00.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto01.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto02.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto03.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto04.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto05.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/producto06.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Botón EMPAQUE ESPECIAL -->
        <div class="btn-opciones">
                <div class="contentbag" id="divEmpaque" hidden>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../assets/img/bolso.png" class="d-block w-100" alt="...">
                        </div>
                        <!-- 
                        <div class="carousel-item">
                            <img src="img/producto05.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="img/producto06.png" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                </div>
                <p class="refer-specialbag">CALM DRESS</p>
                <p class="refer-specialbag">CHOMPA MANGA CORTA</p>
                <p class="refer-specialbag">$20.000</p>
            </div>
            <button id="btn-chance" class="btn-empaque" name="bntOpciones" data-target="divEmpaque"><span class="empaque">EMPAQUE</span><br><span class="especial">ESPECIAL</span></button>
            
            <!-- INPUT PERSONALIZADO -->
                <label class="custom-radio-checkbox">
                    <!-- Input oculto -->
                    <input class="custom-radio-checkbox__input" type="radio" name="empaque" value="empaquesi" >
                    <!-- Imagen en sustitucion -->
                    <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
                </label>
        </div>

        <!-- Buy It Now -->
        <div class="btn-opciones">
            <!-- Botones de TALLAS y agregar + carrito de compras -->
            <div class="elemento4">
                <div class="btn-opciones">
                    <div class="contentsize" id="divSize" hidden>
                        <img class="d-block w-100" src="../assets/img/icicle_ss2020_natural.jpg" alt="">
                        <p class="choicesize mt-3">SELECCIONAR TALLA</p>
                        <div class="btn-sizes2">
                            <button class="btn-change">S</button>
                            <button class="btn-change">M</button>
                            <button class="btn-change">L</button>
                            <button class="btn-change">XL</button>
                        </div>
                    </div>
                </div>
                <button id="btn-size" class="btn-size" name="bntOpciones" data-target="divSize">TALLAS</button>
            </div>
            <a href="#" class="btn-submit" id="aAddCart">ADD TO CART</a>
            <a href="#" class="btn-submit">BUY IT NOW</a>
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

  $('button[name="bntOpciones"]').click(function(){
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

<!-- Script para seleccionar tallas -->
<script type="text/javascript">
    $('#divTalla').find('.aTalla').click( function(){
        $('.aTalla').removeClass('talla-active');
        $(this).addClass('talla-active');
    } )
</script>   







<script>
$('#btnCart, #aAddCart').click( function(){ $('#divCart').css( 'visibility', 'visible' ) } );
$('#closecart').click( function(){ $('#divCart').css('visibility', 'hidden')});
</script>

</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>