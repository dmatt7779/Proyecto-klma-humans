<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_POST['id']; 

    $sql = "delete from usuarios where id = '$id'";




    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){
             
    
        header('location:adminperson.php');
    } 
?>



