
<?php
    session_start();
    include ('../../global/conexion.php');

    $contraentrega = $_GET['contraentrega'];
    $pagoenvio = $_GET['pagoenvio'];
    $iduser = $_SESSION['iduser'];    

    $sentencia = $pdo->prepare("SELECT * FROM Direcciones where id_user = $iduser");
    $sentencia->execute();
    $direcciones = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    $sentencia = $pdo->prepare("SELECT * FROM ventas where usuarios_id = $iduser and estado = 0");
    $sentencia->execute();
    $ventas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    print_r($ventas[0]);

    if($contraentrega == "true"){

        if($direcciones[0]['pagaenvio'] == 'true'){
            $total = (($ventas[0]['subtotal']) - 10000);
            $sql = "UPDATE Direcciones SET contraentrega = 'true', pagaenvio = 'false' WHERE id_user = $iduser";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
            $sql2 = "UPDATE ventas SET subtotal = '$total' WHERE usuarios_id = '$iduser' and estado = 0";
            $sentencia = $pdo->prepare( $sql2 );
            $sentencia -> execute();
        }else{
            $sql = "UPDATE Direcciones SET contraentrega = 'true', pagaenvio = 'false' WHERE id_user = $iduser";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
        }

    }else if($pagoenvio == "true"){        

        if($direcciones[0]['contraentrega'] == 'true'){

            $total = (($ventas[0]['subtotal']) + 10000);

            $sql = "UPDATE Direcciones SET contraentrega = 'false', pagaenvio = 'true' WHERE id_user = $iduser";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
            $sql2 = "UPDATE ventas SET subtotal = '$total' WHERE usuarios_id = '$iduser' and estado = 0";
            $sentencia = $pdo->prepare( $sql2 );
            $sentencia -> execute();
        }else if($direcciones[0]['pagaenvio'] == 'true'){

            $sql = "UPDATE Direcciones SET contraentrega = 'false', pagaenvio = 'true' WHERE id_user = $iduser";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute(); 
        }else{
            $total = $ventas[0]['subtotal'] + 10000;
            $sql = "UPDATE Direcciones SET contraentrega = 'false', pagaenvio = 'true' WHERE id_user = $iduser";
            $sentencia = $pdo->prepare( $sql );
            $sentencia -> execute();
            $sql2 = "UPDATE ventas SET subtotal = '$total' WHERE usuarios_id = '$iduser' and estado = 0";
            $sentencia = $pdo->prepare( $sql2 );
            $sentencia -> execute();
        }
    }

    header("location:pagos2.php");

?>

