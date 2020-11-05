<?php


include "/opt/lampp/htdocs/Klma-humans/global/config.php";
include "/opt/lampp/htdocs/Klma-humans/global/conexion.php";

session_start();



$usuario = $_SESSION['correo'];

if (!isset($usuario)) {
    
    header("location:../login/login1/login.php");
}
$id = $_POST['id'];
$talla = $_POST['talla'];

if ($talla == "") {
    ?>
    <script>
        alert("No has seleccionado ninguna talla");
        window.history.back();

    </script>
    <?php
}else{
   

$iduser = $_SESSION['iduser'];

$ventauser = $pdo->prepare("SELECT * FROM ventas where usuarios_id = '$iduser' and estado = '0';");

$ventauser -> execute();
$opensale=$ventauser->fetchAll(PDO::FETCH_ASSOC);


// validar si existe una venta y si no la hay se crea
if (!isset($opensale[0]['id'])) {
    




    $insert = $pdo->prepare("INSERT INTO ventas (`subtotal`, `estado`, `fecha`, `envio`, `usuarios_id`) VALUES ('0', '0', '2020-04-19 00:00:00', '0', '$iduser');");
    $insert -> execute();



    $ventauser2 = $pdo->prepare("SELECT * FROM ventas where usuarios_id = '$iduser' and estado = '0';");

    $ventauser2 -> execute();
    $opensale2=$ventauser2->fetchAll(PDO::FETCH_ASSOC);

    $idsale2 = $opensale2[0]['id'];
    


    $repetido = $pdo->prepare("SELECT productos_id, talla, cantidad FROM detalleventa where talla = '$talla' and ventas_id = $idsale2 and productos_id = $id;");

    $repetido -> execute();
    $repetidos=$repetido->fetchAll(PDO::FETCH_ASSOC);

     
    if (empty($repetidos)) {




    $producto = $pdo->prepare("INSERT INTO `detalleventa` ( `cantidad`, `productos_id`, `tipo_producto_id`, `talla`, `ventas_id`) VALUES ('1', '$id', '1', '$talla', '$idsale2');");
    $producto -> execute();

    header("location:../Rejillas_generales/loungewear.php");


    }else{


        $cantidad = $repetidos[0]['cantidad'] + 1;

        $repetido_sum = $pdo->prepare("UPDATE detalleventa
        SET cantidad = $cantidad where productos_id = $id;");

        $repetido_sum -> execute();
        
            

            
        }



    

}else {

    $idsale = $opensale[0]['id'];


    $repetido = $pdo->prepare("SELECT productos_id, talla, cantidad, id FROM detalleventa where talla = '$talla' and ventas_id = $idsale and productos_id = $id;");

    $repetido -> execute();
    $repetidos=$repetido->fetchAll(PDO::FETCH_ASSOC);


    if (empty($repetidos)) {
        


        $producto = $pdo->prepare("INSERT INTO `detalleventa` ( `cantidad`, `productos_id`, `tipo_producto_id`, `talla`, `ventas_id`) VALUES ('1', '$id', '1', '$talla', '$idsale');");
        $producto -> execute();

        header("location:../Rejillas_generales/loungewear.php");






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

    $sum_sale2 = $pdo->prepare("UPDATE ventas SET subtotal = $subtotal where id = $idsale");

    $sum_sale2 -> execute();




    
    header("location:../Rejillas_generales/loungewear.php"); 

        
    }

   

    
    
    

    

}
   

    

}
?> 
   


   
    

