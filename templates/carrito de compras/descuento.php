<?php
session_start();

include('../../global/conexion.php');

$iduser = $_SESSION['iduser'];
$codigo = $_POST['codigo'];

$sentencia = $pdo->prepare("SELECT id,subtotal,descontado FROM ventas where usuarios_id = $iduser and estado = 0");
$sentencia->execute();
$venta = $sentencia->fetchAll(PDO::FETCH_ASSOC);
$ventaid = $venta[0]['id'];
$subtotal = $venta[0]['subtotal'];

$sql1 = "SELECT * FROM descuentos WHERE codigo = '$codigo' and estado = true";


$sentencia1 = $pdo->prepare($sql1);
$sentencia1->execute();
$existcode = $sentencia1->fetchAll(PDO::FETCH_ASSOC);

if (count($existcode) > 0) {
    if($venta[0]['descontado'] != 1){
    $porcentaje = $existcode[0]['porcentaje'];
    $total = ($subtotal * $porcentaje)/100;
    $total = $subtotal - $total;
    $sentencia = $pdo->prepare("UPDATE ventas SET descontado = 1,subtotal = $total,porcentaje = $porcentaje WHERE id = '$ventaid'");
    $sentencia->execute();

    header("location:pagos1.php");
    }else{
        ?> 
    
    <script>
      

       var r =   alert('Ya usaste un codigo de descuento');

        window.location.href = "pagos1.php"
    
    </script>
    <?php
    }
} else {
    ?> 
    
    <script>
      

       var r =   alert('Codigo invalido');

        window.location.href = "pagos1.php"
    
    </script>
    <?php
}
