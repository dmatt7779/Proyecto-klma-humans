<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_GET['id']; 

    $sql = "UPDATE ventas SET estado = '3' WHERE id = '$id'";




    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){
             
    
        header('location:ventasvendentregado.php');
    } 
?>



