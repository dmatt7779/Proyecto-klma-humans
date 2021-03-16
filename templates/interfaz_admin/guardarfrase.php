<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');

    
  


    
    $frase = $_POST['frase'];
    $escritor = $_POST['escritor'];
    $emocion = $_POST['emocion'];
    $blog = $_POST['blog'];
    
   
    $sql = "INSERT INTO frases (frase,escritor,emocion,blog,habilitado) VALUES ('$frase', '$escritor', '$emocion','$blog',1);";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    


    
        header('location:adminfrases.php');
    
?>