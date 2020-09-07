<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Especifico - LW</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="../librerias/bootstrap.min.css ">
<link rel="stylesheet" href="../librerias/flexboxgrid.min.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="circulo collapse navbar-collapse col-lg-1 col-md-1 col-sm-1" id="navbarNav">
                <div class="nav-item circulo">
                  <a class="nav-link" href="#"></a>
                </div>
              </div>
              <div class="nav-item titulo col-lg-7 col-md-7">
                <a class="nav-link" href="#"></a>
              </div>
              <div class="col nav-item col-lg-3 col-md-3 col">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item menu-puntos">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item menu-log">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item menu-candado">
                    <a class="nav-link" href="#"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </nav>
    </header>


<!--<div class="container">-->
<div class="grid-lw">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-product">
            <div class="carousel-item active">
                <img src="img/producto00.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto01.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto02.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto03.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto04.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto05.png" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="img/producto06.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!--FIN Carousel-->
    <div class="nested-grid-lw">
        <div class="font-lw-1 elemento1">
                <p class="refer">SOFT</p>
                <p>Ref C1/315-01</p>
                <p>COMFORT</p>
                <p>DESIGN</p>
        </div>

        <div class="elemento2">
            <p class="font-price-lw">$118.000</p>
        </div>
<!--  Seleccionador de tallas -->
        <div class="elemento3" id="divTalla">
            <div class="aTalla contenedor-tallas-lw">S</div>
            <div class="aTalla contenedor-tallas-lw">M</div>
            <div class="aTalla contenedor-tallas-lw">L</div>
            <div class="aTalla contenedor-tallas-lw">XL</div>
        </div>

        <!-- Botones de TALLAS y agregar + carrito de compras -->
        <div class="elemento4">
                <div class="btn-opciones">
                    <div class="contentsize" id="divSize" hidden>
                      <p>SELECCIONAR TALLA</p>
                      <p>S</p>
                      <p>M</p>
                      <p>L</p>
                      <p>XL</p>
                    </div>
                  <button class="btn-size" name="bntOpciones" data-target="divSize">TALLAS</button>
                </div>
                <a href="#" class="btn-submit elemento4">ADD TO CART</a><br>
                <a href="#" class="btn-submit elemento4">BUY IT NOW</a>
        </div>
    </div>
</div>

<!--Descripción del producto abajo de la carousel-->
<div class="body-card">
    <p class="desc-prod-espec">Chompa manga corta con sesgos en contraste</p>
</div>

<!--Botones Opciones Especificos-->
<!-- Boton VER DETALLES -->
<div class="divopciones">
  <div class="btn-opciones">
    <div class="contentdetails" id="divDetalle" hidden>
        <p style="margin-bottom: 2rem;">ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED</p>
        <p style="margin-bottom: 2rem;">SU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL</p>
        <p style="margin-bottom: 2rem;">MADE IN COLOMBIA</p>
    </div>
    <button class="btn-details-prod" name="bntOpciones" data-target="divDetalle">VER DETALLES</button>
  </div>
  
  <!-- Boton VER PRODUCTO -->
  <div class="btn-opciones">
    <div class="contentprod" id="divProducto" hidden>
        <p>ESTA T-SHIRT GALERY FUE ELABORADA EN 100% ALGÓDON ORGÁNICO EXTRA SUAVE, TIENE UN FIT OVERSIZED</p>
        <p>SU ARTE FUE CREADO A TRAVÉS DE UNA EXPRESIÓN EMOCIONAL</p>
        <p>MADE IN COLOMBIA</p>
    </div>
    <button class="btn-details-prod" name="bntOpciones" data-target="divProducto">VER PRODUCTO</button>
  </div>

<!-- Botón EMPAQUE ESPECIAL -->
<div class="btn-opciones">
        <div class="contentbag" id="divEmpaque" hidden>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/producto04.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="img/producto05.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="img/producto06.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <p style="padding: 3%;">CALM DRESS</p>
        <p style="padding: 3%;">EMPAQUE ESPECIAL</p>
        <p style="padding: 3%;">$20.000</p>
    </div>
    <button class="btn-empaque" name="bntOpciones" data-target="divEmpaque">EMPAQUE<br>ESPECIAL</button>
  </div>
</div>









<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
  crossorigin="anonymous"></script>

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
      
//# = Id
//. = Clase
    

  });
    /*function Ocultar() {
            document.getElementById("boxdetails").style.display = "none";
        }

    function Mostrar() {
        document.getElementById("boxdetails").style.display = "block";
    }


    function Mostrar_Ocultar() {
        var box = document.getElementById("boxdetails");

        if (box.style.display == "none") {
            Mostrar();
        }else{
            Ocultar();
        }
    }*/
</script>

<!-- Script para seleccionar tallas -->
<script type="text/javascript">
    $('#divTalla').find('.aTalla').click( function(){
        $('.aTalla').removeClass('talla-active');
        $(this).addClass('talla-active');
    } )
</script>
    
</body>
</html>