<?php
    session_start();
    
    include ('../../global/conexion.php');
  

    $iduser = $_SESSION['iduser'];    
    $id = $_POST['id']; 
    $subtotal = $_POST['subtotal'];

    $sql = "UPDATE ventas SET subtotal = '$subtotal',descontado = 0, porcentaje = 0 WHERE id = '$id'";

    $sql1 = "UPDATE Direcciones SET contraentrega = 'false', pagaenvio = 'false' WHERE id_user = $iduser";
    $sentencia = $pdo->prepare( $sql1 );
    $sentencia -> execute();


    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){   
        header('location:pagos1.php');
    } 
?>



