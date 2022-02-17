<?php
    session_start();
    

    if (!isset($_SESSION['correo'])) {
         
        header("location:../login/login.php");

}
    
    include ('../../global/conexion.php');
  
  
    $emocion = $_POST['emocion'];
    $descripcion = $_POST['descripcion'];
    $link = $_POST['link'];
    $imagenname = $_FILES['imagen']['name'];
    $imagen = $_FILES['imagen']['tmp_name'];
    

        $ruta = "../assets/img/podcast";
        $ruta2 = "podcast";
  
    
    $ruta = $ruta."/".$imagenname;
    $ruta2 = $ruta2."/".$imagenname;


    move_uploaded_file($imagen,$ruta);




    $sql = "INSERT INTO `podcast` (`emocion`,`imagen`,`estado`,`descripcion`,`link`) VALUES ('$emocion',  '$ruta2',1, '$descripcion','$link')";



    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    
    
   
    header("location:adminpodcast.php");

    
   
?>