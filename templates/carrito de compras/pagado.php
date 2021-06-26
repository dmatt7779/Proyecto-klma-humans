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
            header("location:paprobado.php");
            break;
        default:
            # code...
            break;
    }
    ?>
    <h1>lo pagaste una zimbita</h1>

    <a href="http://klmahumans.com/templates/main/h0m3.php">volver</a>
</body>

</html>