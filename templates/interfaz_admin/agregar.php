<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');
  
    $codigo = $_POST['codigo']; 
    $nombre = $_POST['nombre'];
    $tipologia = $_POST['tipologia'];
    $precio_venta = $_POST['precio_venta'];
    $precio_compra = $_POST['precio_compra'];
    $cantidad = $_POST['cantidad'];
    $hoy = date('Y-m-d');
    $fecha =   $hoy . " " . date("H") . ":"  . date("i") . ":" . date("s");
    $historia = $_POST['historia'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $imagenname = $_FILES['imagen']['name'];
    $imagen = $_FILES['imagen']['tmp_name'];
    $emocion = $_POST['emocion'];
    

    if ($tipologia == 1) {
        $ruta = "../assets/img/prodgenerales/Loungewear";
        $ruta2 = "Loungewear";
    }elseif($tipologia == 2){
        $ruta = "../assets/img/prodgenerales/Calmwear";
        $ruta2 = "Calmwear";

    }else{
        $ruta = "../assets/img/prodgenerales/Transition";
        $ruta2 = "Transition";

    }
    
    $ruta = $ruta."/".$imagenname;
    $ruta2 = $ruta2."/".$imagenname;

    move_uploaded_file($imagen,$ruta);

    $sql = "INSERT INTO `ejemplo`.`productos` (`codigo`,`nombre`, `tipologia_id`, `precio_venta`, `precio_compra`, `cantidad`, `habilitado`, `fecha`, `historia`, `descripcion`, `genero`, `imagen`, `emocion`) VALUES ('$codigo', '$nombre', '$tipologia', '$precio_venta' , '$precio_compra' , '$cantidad' , '1' , '$fecha' , '$historia' , '$descripcion' , '$genero' , '$ruta2' , '$emocion')";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    
   

    
   
?>