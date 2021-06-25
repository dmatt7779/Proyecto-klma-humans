<?php
    session_start();
    

    if (!isset($_SESSION['correo'])) {
         
        header("location:../login/login.php");

}
    
    include ('../../global/conexion.php');
  
  
    $codigo = $_POST['codigo'];
    $porcentaje = $_POST['porcentaje'];


    $sql = "INSERT INTO `descuentos` (`codigo`,`porcentaje`,`estado`) VALUES ( '$codigo',  '$porcentaje', true)";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    
    
   
    header("location:admindescuentos.php");

    
   
?>