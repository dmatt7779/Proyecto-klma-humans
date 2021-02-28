<?php

include "../../global/conexion.php";

session_start();

date_default_timezone_set("America/Bogota");
$hoy = date('Y-m-d');
$fecha =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");

$usuario = $_SESSION['correo'];



$id = $_POST['id'];
$talla = strtoupper($_POST['talla']);


if ($talla == "") {
    ?>
    <script>
        alert("No has seleccionado ninguna talla");
        window.history.back();

    </script>
    <?php
}else{
   
$iduser = $_SESSION['iduser'];
if (empty($idusuario)) {
    
    header("location:../login/login.php");
}

$ventauser = $pdo->prepare("SELECT * FROM ventas where usuarios_id = '$iduser' and estado = '0';");

$ventauser -> execute();
$opensale=$ventauser->fetchAll(PDO::FETCH_ASSOC);


// validar si existe una venta y si no la hay se crea
if (!isset($opensale[0]['id'])) {
    

    $insert = $pdo->prepare("INSERT INTO ventas (`subtotal`, `estado`, `fecha`, `envio`, `usuarios_id`) VALUES ('0', '0', '$fecha', '0', '$iduser');");
    $insert -> execute();



    $ventauser2 = $pdo->prepare("SELECT * FROM ventas where usuarios_id = '$iduser' and estado = '0';");

    $ventauser2 -> execute();
    $opensale2=$ventauser2->fetchAll(PDO::FETCH_ASSOC);

    $idsale2 = $opensale2[0]['id'];
    

    $repetido = $pdo->prepare("SELECT productos_id, talla, cantidad FROM detalleventa where talla = '$talla' and ventas_id = $idsale2 and productos_id = $id;");

    $repetido -> execute();
    $repetidos=$repetido->fetchAll(PDO::FETCH_ASSOC);

     
    if (empty($repetidos)) {

    $producto = $pdo->prepare("INSERT INTO `detalleventa` ( `cantidad`, `productos_id`, `talla`, `ventas_id`) VALUES ('1', '$id',  '$talla', '$idsale2');");
    $producto -> execute();


    if (empty($iduser)) {
    
        header("location:../login/login.php");
    }else{
     header("location:../main/menu2.php");
    }

    }else{

        $cantidad = $repetidos[0]['cantidad'] + 1;

        $repetido_sum = $pdo->prepare("UPDATE detalleventa
        SET cantidad = $cantidad where productos_id = $id and ventas_id = $idsale2;");

        $repetido_sum -> execute();
        
                        
    }



}else {

    $idsale = $opensale[0]['id'];


    $repetido = $pdo->prepare("SELECT productos_id, talla, cantidad, id FROM detalleventa where talla = '$talla' and ventas_id = $idsale and productos_id = $id;");

    $repetido -> execute();
    $repetidos=$repetido->fetchAll(PDO::FETCH_ASSOC);


    if (empty($repetidos)) {
        

        $producto = $pdo->prepare("INSERT INTO `detalleventa` ( `cantidad`, `productos_id`, `talla`, `ventas_id`) VALUES ('1', '$id', '$talla', '$idsale');");
        $producto -> execute();

        if (empty($iduser)) {
    
            header("location:../login/login.php");
        }else{
         header("location:../main/menu2.php");
        }


        
    }else{


    $cantidad = $repetidos[0]['cantidad'] + 1;
    $id_detal = $repetidos[0]['id'];

    $repetido_sum = $pdo->prepare("UPDATE detalleventa
    SET cantidad = $cantidad where productos_id = $id and ventas_id = $idsale and id = $id_detal");

    $repetido_sum -> execute();


    $sum_sale = $pdo->prepare("SELECT detalleventa.cantidad, productos.precio_venta from detalleventa inner join productos on detalleventa.productos_id = productos.id where detalleventa.ventas_id = $idsale");

    $sum_sale -> execute();
    $sum_sales=$sum_sale->fetchAll(PDO::FETCH_ASSOC);

    $subtotal = 0;

    foreach ($sum_sales as $key3) {
        
    $subtotal = $subtotal + ($key3['cantidad'] * $key3['precio_venta']);


    }
    
    if (empty($iduser)) {
    
        header("location:../login/login.php");
    }else{
     header("location:../main/menu2.php");
    }

        
    }

    
}


}
?>