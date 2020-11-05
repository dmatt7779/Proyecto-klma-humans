
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
            <li class="nav-item">
            <button class="nav-link menu-candado" id="btnCart"></button>
            </li>
        </ul>
        </div>
    </div>
    </div>
    </div>
</nav>
</header>










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
                            <span>-</span><p class="item-amount mb-4"></p><span></span>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
  crossorigin="anonymous"></script>
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

