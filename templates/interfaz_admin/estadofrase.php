<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_GET['id']; 

    $sql = "UPDATE frases SET habilitado = '0' WHERE id = '$id'";




    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){
             
    
        header('location:adminfrases.php');
    } 
?>



