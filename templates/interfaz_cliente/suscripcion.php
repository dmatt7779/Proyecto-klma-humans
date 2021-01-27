<?php
    session_start();
   
    include ('../../global/conexion.php');

    
  


   
    $correo = $_POST['correo'];
    if($correo == ''){
     header("location:../login/login.php"); 

    }

    $sql2 = "SELECT * from suscripcion where correo = '$correo'";

    $sentencia2 = $pdo->prepare( $sql2 );
    $sentencia2 -> execute();
    $register2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);

if(!isset($register2[0]['id'])){
    $sql = "INSERT INTO suscripcion (correo) VALUES ('$correo')";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?> 
    <script>
      

        window.location.href = "../interfaz_cliente/clienteintro.php"
    
    </script>
    <?php
    
}else{

    ?> 
    <script>
      

       var r =   alert('Actualmente ya estas suscrito');
        window.location.href = "../interfaz_cliente/clienteintro.php"
    
    </script>
    <?php

     
    }

    
    
        
    
?>