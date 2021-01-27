<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_POST['id']; 
    $subtotal = $_POST['subtotal'];

    $sql = "UPDATE ventas SET subtotal = '$subtotal' WHERE id = '$id'";




    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){   
        header('location:../main/menu.php');
    } 
?>



