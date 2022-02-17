<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');

    
  


    
    $campaña = $_POST['campaña'];

    
   
    $sql = "INSERT INTO campañas (campaña) VALUES ('$campaña');";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    


    
        header('location:admincampañas.php');
    
?>