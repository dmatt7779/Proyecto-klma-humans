<?php

    include "../../global/config.php";
    include "../../global/conexion.php";

    $iduser = 1;     
    $sentencia = $pdo->prepare("SELECT id FROM ventas where usuarios_id = $iduser and estado = 0");
    $sentencia -> execute();
    $venta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($venta)) {
        $ventaid =  "";
    }else{
        $ventaid =  $venta[0]['id'];
    }

    $sentencia = $pdo->prepare("SELECT detalleventa.cantidad, detalleventa.talla, productos.nombre, productos.precio_venta, productos.imagen from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $ventaid");
    $sentencia -> execute();
    $detalleventa=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $subtotal = 0;

    foreach($detalleventa as $detventa){
?>
    <div class="cart-item">
        <div class="data-item">
            <div class="plus-minus">
                <span>-</span><p class="item-amount mb-4">&nbsp &nbsp<?php echo $detventa['cantidad'] ?>&nbsp &nbsp</p><span>+</span>
            </div>
            <h2><?php echo $detventa['nombre'] ?></h2>
            <span class="cart-size">talla <?php echo $detventa['talla'] ?></span>
            <h3><?php echo $detventa['precio_venta'] ?></h3>
            <!-- <span class="remove-item">remove</span> -->
        </div>
        <img src="../assets/img/prodgenerales/<?php echo $detventa['imagen']; ?>" alt="">
    </div>
<?php
    }
?>