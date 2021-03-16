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
<?php require "../navbar_footer/header.php"; ?>

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
	<div class="gridclmw mt-5">
	<?php for($i=0 ; $i < count($listaproductos) ;  $i++    ){ ?>
		<div style="margin-bottom: 15%;" class="card-clmw">
			<a href="#"><div class="cover" onclick="idprod(<?php echo $listaproductos[$i]['id'];?>)" style="background-image: url(../assets/img/prodgenerales/<?php echo $listaproductos[$i]['imagen']; ?>)" title="Diseño de museo"></div></a>
			<div class="card-body">
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

<?php include "../navbar_footer/footer.php";?>
</body>
</html>

