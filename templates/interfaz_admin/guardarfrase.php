<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');

    
  


    $idproducto = $_POST['idproducto']; 
    $frase = $_POST['frase'];
    $escritor = $_POST['escritor'];
    $emocion = $_POST['emocion'];
    
   
    $sql = "INSERT INTO frases (frase,idproducto,escritor,emocion) VALUES ('$frase', '$idproducto', '$escritor', '$emocion');";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    


    
        header('location:adminfrases.php');
    
?>