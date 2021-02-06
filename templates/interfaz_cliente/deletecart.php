<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_POST['iddetalleventa']; 

    $sql = "delete from detalleventa where id = '$id'";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    header("location:../main/menu2.php"); 

  
?>

