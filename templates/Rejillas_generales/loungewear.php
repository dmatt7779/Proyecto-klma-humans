<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOUNGEWEAR KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/librerias/flexboxgrid.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    
</head> 
<body>
<nav id="hnavgen" class="navbar-expand-sm navbar-light">
    <header class="mainheader mainheader2">
        <div class="navlogo">
                <a href="../main/menu.php"><img id="logoshopnav" src="../assets/img/nav_foot/shop.gif" alt="Logo de compras"></a>
        </div>

        <div class="navlogo2">
            <a href="h0m3.php"><img id="logomainnav" src="../assets/img/nav_foot/Logo.png" alt="logo principal"></a>
            <a href="../test/test.php" id="lbtngo-test" class="btn btnGoTest" hidden>HACER TEST</a>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nested-nav mr-2">

                    <a class="navicons m-2" href="../main/menu2.php"><div class="dotsmenu"><img id="dotsnav" src="../assets/img/nav_foot/menu.png" alt="menu 2"></div></a>

                    <a href="../login/login.php" class="m-2"><div class="loginmenu"><img id="loginnav" src="../assets/img/nav_foot/Login.png" alt="Login de usuarios"></div></a>

                    <a href="#" class="m-2" id="btnCart"><div class="cartmenu"><img id="shopcartnav" src="../assets/img/nav_foot/Cartera.png" alt="carrito de compras"></div></a>
                </div>
            </div>
    </header>
</nav>

<!-- Scroll Bar personalizado -->

<div id="scrollgenlg">

    <div id="scrolltitlegenlg">LOUNGEWEAR</div>

    <!-- Track -->
    <div class="scrolllightbarglg">

    <!-- Thumbs -->
        <div id="scrollwraplw" class="scrollblock">
        </div>
    </div>
</div>

<!-- Espacio Horizontal para imagenes de punta a punta, mantener las margenes de las imagenes horizontales -->

<!-- Rejilla Vertical alineada al centro -->

<?php
    $sentencia = $pdo->prepare("SELECT * FROM productos where tipologia_id = 1 and habilitado = 1");
    $sentencia -> execute();
    $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="gridvertical">
        <div class="card-body">
            <a href="javascript:enviar_formulario1()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[0]['imagen']; ?>" alt=""></a>
            <a href="#" class="card-title"><p><?php echo $listaproductos[0]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[0]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[0]['precio_venta']; ?></a>
        </div>
    </div>
    <form action="../Prod_especifico/especifico-loungewear.php" method=post name="formulario1">
            <input type="hidden" name="id" value="<?php echo $listaproductos[0]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[0]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[0]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[0]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[0]['precio_venta']; ?>">
        </form>

<!-- Grid horizontal Importante mantener margenes de las imagenes en esta sección -->
    <div class="gridhorizontal">
        <div>
            <a href="javascript:enviar_formulario2()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[1]['imagen']; ?>" alt=""></a>
            <div class="card">
            <a href="#" class="card-title"><p><?php echo $listaproductos[1]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[1]['descripcion']; ?></p>
            <a href="#" class="price-horizontal"><p>$<?php echo $listaproductos[1]['precio_venta']; ?></p></a>
            </div>
        </div>
    </div>
        <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario2">
            <input type="hidden" name="id" value="<?php echo $listaproductos[1]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[1]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[1]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[1]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[1]['precio_venta']; ?>">
        </form>
<!-- Rejilla Vertical alineada al centro -->
    <div class="gridvertical">
        <div class="card-body">
            <a href="javascript:enviar_formulario3()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[2]['imagen']; ?>" alt=""></a>
            <a href="#" class="card-title"><p><?php echo $listaproductos[2]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[2]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[2]['precio_venta']; ?></a>
        </div>
    </div>
    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario3">
            <input type="hidden" name="id" value="<?php echo $listaproductos[2]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[2]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[2]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[2]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[2]['precio_venta']; ?>">
        </form>

<!-- Grid de las imagenes verticales a ambos lados contenidas dentro de una misma rejilla, pero su espacio esta repartido en ambas -->
    <div class="griddoblevertical">
        <div class="card-body">
            <div><a href="javascript:enviar_formulario4()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[3]['imagen']; ?>" alt=""></a></div>
            <a href="#" class="card-title"><p><?php echo $listaproductos[3]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[3]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[3]['precio_venta']; ?></a>
        </div>

        <div class="card-body">
            <div><a href="javascript:enviar_formulario5()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[4]['imagen']; ?>" alt=""></a></div>
            <a href="#" class="card-title"><p><?php echo $listaproductos[4]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[4]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[4]['precio_venta']; ?></a>
        </div>
    </div>

        <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario4">
            <input type="hidden" name="id" value="<?php echo $listaproductos[3]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[3]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[3]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[3]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[3]['precio_venta']; ?>">
        </form>

        <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario5">
            <input type="hidden" name="id" value="<?php echo $listaproductos[4]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[4]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[4]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[4]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[4]['precio_venta']; ?>">
        </form>

<!-- Grid horizontal Importante mantener margenes de las imagenes en esta sección -->
   
    <div class="gridhorizontal">
        <div>
            <a href="javascript:enviar_formulario6()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[5]['imagen']; ?>" alt=""></a>
            <div class="card">
            <a href="#" class="card-title"><p><?php echo $listaproductos[5]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[5]['descripcion']; ?></p>
            <a href="#" class="price-horizontal"><p>$<?php echo $listaproductos[5]['precio_venta']; ?></p></a>
            </div>
        </div>
    </div>


    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario6">
            <input type="hidden" name="id" value="<?php echo $listaproductos[5]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[5]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[5]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[5]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[5]['precio_venta']; ?>">
        </form>

<!-- Rejilla Vertical alineada al centro -->
<div class="gridvertical">
        <div class="card-body">
            <a href="javascript:enviar_formulario7()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[6]['imagen']; ?>" alt=""></a>
            <a href="#" class="card-title"><p><?php echo $listaproductos[6]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[6]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[6]['precio_venta']; ?></a>
        </div>
    </div>
    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario7">
            <input type="hidden" name="id" value="<?php echo $listaproductos[6]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[6]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[6]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[6]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[6]['precio_venta']; ?>">
        </form>

<!-- Grid de las imagenes verticales a ambos lados contenidas dentro de una misma rejilla, pero su espacio esta repartido en ambas -->
<div class="griddoblevertical">
        <div class="card-body">
            <div><a href="javascript:enviar_formulario8()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[7]['imagen']; ?>" alt=""></a></div>
            <a href="#" class="card-title"><p><?php echo $listaproductos[7]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[7]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[7]['precio_venta']; ?></a>
        </div>



        <div class="card-body">
            <div><a href="javascript:enviar_formulario9()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[8]['imagen']; ?>" alt=""></a></div>
            <a href="#" class="card-title"><p><?php echo $listaproductos[8]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[8]['descripcion']; ?></p>
            <a href="#" class="price">$<?php echo $listaproductos[8]['precio_venta']; ?></a>
        </div>
    </div>



    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario8">
            <input type="hidden" name="id" value="<?php echo $listaproductos[7]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[7]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[7]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[7]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[7]['precio_venta']; ?>">
        </form>

        <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario9">
            <input type="hidden" name="id" value="<?php echo $listaproductos[8]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[8]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[8]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[8]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[8]['precio_venta']; ?>">
        </form>

<!-- Grid horizontal Importante mantener margenes de las imagenes en esta sección -->
<div class="gridhorizontal">
        <div>
            <a href="javascript:enviar_formulario10()"><img src="../assets/img/prodgenerales/<?php echo $listaproductos[9]['imagen']; ?>" alt=""></a>
            <div class="card">
            <a href="#" class="card-title"><p><?php echo $listaproductos[9]['nombre']; ?></p></a>
            <p class="card-text"><?php echo $listaproductos[9]['descripcion']; ?></p>
            <a href="#" class="price-horizontal"><p>$<?php echo $listaproductos[9]['precio_venta']; ?></p></a>
            </div>
        </div>
    </div>

    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario10">
            <input type="hidden" name="id" value="<?php echo $listaproductos[9]['id']; ?>"> 
            <input type="hidden" name="imagen" value="<?php echo $listaproductos[9]['imagen']; ?>">
            <input type="hidden" name="nombre" value="<?php echo $listaproductos[9]['nombre']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $listaproductos[9]['descripcion']; ?>">
            <input type="hidden" name="precio_venta" value="<?php echo $listaproductos[9]['precio_venta']; ?>">
        </form>


    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../assets/js/new.js"></script>

    <!-- scroll bar -->
<script>
   $(window).scroll(function(event) {
        var scrollTop = $(window).scrollTop()
        var Tamano = scrollTop / $('#scrollwraplw').height();
        $('#scrollwraplw').css('top', parseInt( Tamano ) +'px')
        
        console.log( Tamano );
        if( scrollTop >= 0 ){
            $('#scrollwraplw').css('display', 'block')
            $('#scrollwraplw').parent().css('display', 'block')
        } else if( scrollTop < 0 ){
            $('#scrollwraplw').css('display', 'none')
            $('#scrollwraplw').parent().css('display', 'none')
        }
    });
</script>

    <!-- Dynamic Navbar -->
<script>
    window.addEventListener('scroll', function() {

        let routenavbar = "../assets/img/nav_foot/"
        let header = document.querySelector('header');
        let windowPosition = window.scrollY;

        header.classList.toggle('scrolling-active', windowPosition > 80);

        if( windowPosition >= 80 ){
            $('#logoshopnav').attr( 'src', routenavbar + 'Shop-White.gif');
            $('#dotsnav').attr( 'src', routenavbar + 'menu2.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login2.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera2.png');
            $('#logomainnav').attr( 'hidden', true );
            $('#lbtngo-test').removeAttr( 'hidden' );
        }else if(windowPosition < 80) {
            $('#logoshopnav').attr( 'src', routenavbar + 'shop.gif' );
            $('#dotsnav').attr( 'src', routenavbar + 'menu.png' );
            $('#loginnav').attr( 'src', routenavbar + 'Login.png' );
            $('#shopcartnav').attr( 'src', routenavbar + 'Cartera.png');
            $('#lbtngo-test').attr( 'hidden', true );
            $('#logomainnav').removeAttr( 'hidden' );
        }
    })

</script>

<?php include "../navbar_footer/footer.php";?>
</body>
</html>