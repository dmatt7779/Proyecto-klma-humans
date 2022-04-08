<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    
    include ('../../global/conexion.php');



    $id = $_GET['id'];
    $url = 'https://sandbox.wompi.co/v1/transactions/' . $id;
    $data = file_get_contents($url);
    $data = json_decode($data);
    $status = $data->{'data'}->{'status'};



    switch ($status) {
        case 'DECLINED':
            header("location:pdeclinado.php");
            break;
        case 'ERROR':
            header("location:perror.php");
            break;
        case 'APPROVED':
            echo "PAGADO";
            $iduser = $_SESSION['iduser'];      
            $sentencia = $pdo->prepare("SELECT id,subtotal FROM ventas where usuarios_id = $iduser and estado = 0");
            $sentencia -> execute();
            $venta=$sentencia->fetchAll(PDO::FETCH_ASSOC);    
            $ventaid =  $venta[0]['id'];
            $subtotal =  $venta[0]['subtotal'];
            $sql = "UPDATE ventas SET ESTADO = 1, total = '$subtotal' WHERE id = '$ventaid'";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
            $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sql2 = "SELECT productos_id,cantidad FROM detalleventa where ventas_id = $ventaid";
            $sentencia1 = $pdo->prepare( $sql2 );
            $sentencia1 -> execute();
            $SellDetails = $sentencia1->fetchAll(PDO::FETCH_ASSOC);
            for ($i=0; $i < count($SellDetails); $i++) { 
                $idProducto = $SellDetails[$i]['productos_id'];

                $sql3 = "SELECT cantidad FROM productos where id = $idProducto";
                $sentencia3 = $pdo->prepare( $sql3 );
                $sentencia3 -> execute();
                $cantidadAntigua = $sentencia3->fetchAll(PDO::FETCH_ASSOC);

                $cantidadNueva = $cantidadAntigua[0]['cantidad'] - $SellDetails[$i]['cantidad']

                $sql4 = "UPDATE productos SET cantidad = $cantidadNueva WHERE id = $idProducto";
                $sentencia4 = $pdo->prepare( $sql4 );
                $sentencia4 -> execute();
            }
            header("location:paprobado.php");
            break;
        default:
            # code...
            break;
    }
    ?>
    <a href="http://klmahumans.com/templates/main/h0m3.php">volver</a>
</body>

</html>