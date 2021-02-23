<?php
    session_start();
    

    if (!isset($_SESSION['correo'])) {
         
        header("location:../login/login.php");

}
    
    include ('../../global/conexion.php');
  
  
    $nombre = $_POST['nombre'];
    $imagenname = $_FILES['imagen']['name'];
    $imagen = $_FILES['imagen']['tmp_name'];
    

        $ruta = "../assets/img/classics";
        $ruta2 = "classics";
  
    
    $ruta = $ruta."/".$imagenname;
    $ruta2 = $ruta2."/".$imagenname;


    move_uploaded_file($imagen,$ruta);





//parte del carrusel





    $sql = "INSERT INTO `classics` (`nombre`,`imagen`) VALUES ( '$nombre',  '$ruta2' )";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    
    
   
    header("location:adminclassics.php");

    
   
?>