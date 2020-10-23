<!DOCTYPE html>
<?php

include "/opt/lampp/htdocs/Klma-humans/global/config.php";
include "/opt/lampp/htdocs/Klma-humans/global/conexion.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOUNGEWEAR KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">

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

    <!-- Track -->
    <div style="width: 2px; height: 300px; background-color: orangered; z-index: 2; position: fixed; top: 0; bottom: 0; left: 0; margin: auto; margin-left: 50px;">

        <!-- Thumbs -->
        <div style=" width: 4px; height: 50px; position: absolute; background-color: purple;" id="scrollwrap"></div>
    </div>

<!-- Espacio Horizontal para imagenes de punta a punta, mantener las margenes de las imagenes horizontales -->

<!-- Rejilla Vertical alineada al centro -->

<?php
    $sentencia = $pdo->prepare("SELECT * FROM productos where tipologia_id = 1");
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
    <form action="../Prod_especifico/especifico-loungewear.php" method=post       name="formulario1">
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

    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
    <script src="../assets/js/new.js"></script>
<!--     

</body>
</html>