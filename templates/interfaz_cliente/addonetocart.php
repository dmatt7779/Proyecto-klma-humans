<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_POST['iddetalleventasuma']; 
    $cantidad = $_POST['cantidadsuma'];

    $cantidad = $cantidad + 1;

    $sql = "UPDATE detalleventa SET cantidad = $cantidad where id = $id";

   
 

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();

      
    header("location:../main/menu2.php"); 


  
?>

