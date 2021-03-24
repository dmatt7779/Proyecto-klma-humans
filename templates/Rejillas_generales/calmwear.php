<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALMWEAR KLMA' HUMANS</title>

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
<div id="scrollCalm">

    <div id="scrolltitleCalm">CALMWEAR</div>

    <!-- Track -->
    <div class="scrolllightbar">

    <!-- Thumbs -->
        <div id="scrollwrapcw" class="scrollblock">
        </div>
    </div>
</div>

<?php
    $sentencia = $pdo->prepare("SELECT * FROM productos where tipologia_id = 2 and habilitado = 1");
    $sentencia -> execute();
    $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

	
<form action="../Prod_especifico/especifico-calmwear.php" name="formprod" method="post">
		<input type="hidden" id=prod name="idprod">
	</form>
	<!--Productos -->
	<div class="gridclmw">
	<?php for($i=0 ; $i < count($listaproductos) ;  $i++    ){ ?>
		<div style="margin-bottom: 15%;" class="card-clmw">
			<a href="#"><div class="cover" onclick="idprod(<?php echo $listaproductos[$i]['id'];?>)" style="background-image: url(../assets/img/prodgenerales/<?php echo $listaproductos[$i]['imagen']; ?>)" title="Diseño de museo"></div></a>
			<div class="card-body card-bodyMAC">
			<a href="#" class="card-title"><p><?php echo $listaproductos[$i]['nombre']; ?></p></a>
			<p class="text-clmw"><?php echo $listaproductos[$i]['descripcion']; ?></p>
			<p class="price" href="#"><?php echo $listaproductos[$i]['precio_venta']; ?></p>
			</div>
		</div>


	<?php }?>	
	</div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../assets/js/new.js"></script>


<script>
    function idprod(i){
        document.getElementById("prod").value = i
        document.formprod.submit()
    }
</script>

	<!-- scroll bar -->
<script>
   $(window).scroll(function(event) {
        var scrollTop = $(window).scrollTop()
        var Tamano = scrollTop / $('#scrollwrapcw').height();
        $('#scrollwrapcw').css('top', parseInt( Tamano ) +'px')
        
        console.log( Tamano );
        if( scrollTop >= 0 ){
            $('#scrollwrapcw').css('display', 'block')
            $('#scrollwrapcw').parent().css('display', 'block')
        } else if( scrollTop < 0 ){
            $('#scrollwrapcw').css('display', 'none')
            $('#scrollwrapcw').parent().css('display', 'none')
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

