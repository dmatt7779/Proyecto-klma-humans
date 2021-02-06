<?php
include "../../global/conexion.php";
session_start();
$id = $_POST['id'];

if(empty($id)){
    header("location:../Rejillas_generales/loungewear.php");

}

$sentencia = $pdo->prepare("SELECT * FROM productos where id = $id");
$sentencia -> execute();
$producto=$sentencia->fetchAll(PDO::FETCH_ASSOC);  





?>
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
<?php require "../navbar_footer/header.php"; ?>

<!-- Scroll Bar personalizado -->

<div id="scrolllg">

    <div id="scrolltitlelg">LOUNGEWEAR</div>

    <!-- Track -->
    <div class="scrolllightbar">

    <!-- Thumbs -->
        <div id="scrollwrap" class="scrollblock">
        </div>
    </div>
</div>
    
<!-- INICIO GRID PADRE -->
<div>
    <div class="grid-lw mt-4">
        <!-- Carousel para imagenes de productos -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-product">
                <div class="carousel-item active">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto00.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto01.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto02.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto03.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto04.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto05.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto06.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!--FIN Carousel-->

        <!-- GRID Anidado -->
        <div class="nested-grid-lw">
            <div class="font-lw-1 elemento1">
                    <p class="refer">SOFT</p>
                    <p class="refer">REF <?php echo $producto[0]['codigo'] ?></p>
                    <p class="refer">COMFORT</p>
                    <p class="refer">DESIGN</p>
            </div>

            <!-- Precio -->
            <div class="elemento2">
                <p class="font-price-lw">$<?php echo number_format($producto[0]['precio_venta']) ?></p>
            </div>

            <!--  Seleccionador de Tallas -->
            <div class="elemento3" id="divTalla">
                <div  onclick="talla('s');" class="aTalla contenedor-tallas-lw talla-active">S</div>
                <div onclick="talla('m');" class="aTalla contenedor-tallas-lw">M</div>
                <div onclick="talla('l');" class="aTalla contenedor-tallas-lw">L</div>
                <div onclick="talla('xl');" class="aTalla contenedor-tallas-lw">XL</div>
            </div>
        </div><!-- FIN GRID Anidado -->
    </div><!-- FIN GRID PADRE -->
        <form action="newcar.php" name="carrito" method="post">
            <input type="hidden" name="talla" id="talla" value="S">
            <input type="hidden" name="id" value="<?php echo $producto[0]['id'] ?>">
        </form>

    <!--Descripción del producto bajo el carousel-->
    <div class="body-card">
        <p class="desc-prod-espec"><?php echo $producto[0]['historia'] ?></p>
    </div>

    <!--Botones Opciones para mostrar contenedores hidden-->
    <div class="divopciones">
        <!-- Contenedor de VER DETALLES -->
        <div class="btn-opciones">
            <div class="contentdetails" id="divDetalle" hidden>
                <p class="refer-details"><?php echo $producto[0]['historia'] ?></p>
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
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto00.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto01.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto02.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto03.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto04.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto05.png" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="../assets/img/prodgenerales/prod_esp/loungewear/producto06.png" class="d-block w-100" alt="...">
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
                                <img src="../assets/img/prodgenerales/prod_esp/loungewear/bolso.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <p class="refer-specialbag"><?php echo $producto[0]['nombre'] ?></p>
                    <p class="refer-specialbag"><?php echo $producto[0]['descripcion'] ?></p>
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
                        <img class="d-block w-100" src="../assets/img/prodgenerales/prod_esp/loungewear/icicle_ss2020_natural.jpg" alt="">
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
            <a onclick="enviar_carro();" href="#" class="btn btn-submit" id="aAddCart">ADD TO CART</a>
            <a href="#" class="btn btn-submit">BUY IT NOW</a>
        </div>
    </div><!-- FIN Contenedores hidden -->
</div>

<!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Check  -->
<script>
    function prueba(){
        var isChecked = document. getElementById('test').checked;
            if(isChecked){
                window.location.href = "../carrito de compras/pagos1.php"
            }else{

                alert("para proceder a finalizar el pedido debe aceptar los terminos y condiciones")
            }
    }
</script>

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
          
          Elemento.attr('hidden', true)
        }
      });
</script>

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



<!-- Funcion para seleccionar Empaque Especial -->
<script>
    $('#btnCart, #aAddCart').click( function(){ $('#divCart').css( 'visibility', 'visible' ) } );
    $('#closecart').click( function(){ $('#divCart').css('visibility', 'hidden')});
</script>

<script src="../assets/js/carrito.js"></script>
</body>
</html>

<?php include "../navbar_footer/footer.php";?>