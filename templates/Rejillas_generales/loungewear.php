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
<?php require "../navbar_footer/header.php"; ?>
    <!-- Track -->
    <div style="width: 2px; height: 300px; background-color: orangered; z-index: 2; position: fixed; top: 0; bottom: 0; left: 0; margin: auto; margin-left: 50px;">

        <!-- Thumbs -->
        <div style=" width: 4px; height: 50px; position: absolute; background-color: purple;" id="scrollwrap"></div>
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

</body>
</html>