<?php
    session_start();

    if (!isset($_SESSION['correo'])) {
         
        header("location:../login/login.php");

}
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
    $empaque = $_POST['empaque'];
    $imagennamecalmwear = $_FILES['imagencalmwear']['name'];
    $imagencalmwear = $_FILES['imagencalmwear']['tmp_name'];
    

    if ($tipologia == 315) {
        $ruta = "../assets/img/prodgenerales/Loungewear";
        $ruta2 = "Loungewear";
        $rutacalmwear = "../assets/img/prodgenerales/Loungewear";
        $ruta2calmwear = "Loungewear";
        $tipologia = 1;
    }elseif($tipologia == 220){
        $ruta = "../assets/img/prodgenerales/Calmwear";
        $ruta2 = "Calmwear";
        $rutacalmwear = "../assets/img/prodgenerales/Calmwear";
        $ruta2calmwear = "Calmwear";
        $tipologia = 2;

    }elseif($tipologia == 223){
        $ruta = "../assets/img/prodgenerales/Transition";
        $ruta2 = "Transition";
        $rutacalmwear = "../assets/img/prodgenerales/Transition";
        $ruta2calmwear = "Transitionr";
        $tipologia = 3;

    }
    
    $ruta = $ruta."/".$imagenname;
    $ruta2 = $ruta2."/".$imagenname;

    $rutacalmwear = $rutacalmwear."/".$imagennamecalmwear;
    $ruta2calmwear = $ruta2calmwear."/".$imagennamecalmwear;

    move_uploaded_file($imagen,$ruta);
    move_uploaded_file($imagencalmwear,$rutacalmwear);


// parte del carrusel

$rutas = array();
$imagenes = array();

for ($i = 0; $i < count($_FILES['imagenes']['name']); $i++) {

    array_push($rutas, $_FILES['imagenes']['name'][$i]);
    array_push($imagenes, $_FILES['imagenes']['tmp_name'][$i]);
}

$ruta1 = "../assets/img/carrusel/";
$rutaconcatenada = "";
$rutaconcatenadabd = "";
$rutabd = "carrusel/";
$rutasfinales = array();
$rutasfinalesbd = array();



for ($i = 0; $i < count($rutas); $i++) {

    $rutaconcatenada = $ruta1 . ((string)$rutas[$i]);
    array_push($rutasfinales, $rutaconcatenada);
    $rutaconcatenadabd = $rutabd . ((string)$rutas[$i]);
    array_push($rutasfinalesbd, $rutaconcatenadabd);
}


for ($i = 0; $i < count($rutasfinales); $i++) {

    move_uploaded_file($imagenes[$i], $rutasfinales[$i]);
}

$cadenasave = '';

for ($i = 0; $i < count($rutasfinalesbd); $i++) {

    $cadenasave = $cadenasave.','.$rutasfinalesbd[$i];
}

$cadenasave = substr($cadenasave,1);


//parte del carrusel





    $sql = "INSERT INTO `ejemplo`.`productos` (`codigo`,`nombre`, `tipologia_id`, `precio_venta`, `precio_compra`, `cantidad`, `habilitado`, `fecha`, `historia`, `descripcion`, `genero`, `imagen`, `carrusel`, `emocion`, `empaque`, `imagencalmwear` ) VALUES ('$codigo', '$nombre', '$tipologia', '$precio_venta' , '$precio_compra' , '$cantidad' , '1' , '$fecha' , '$historia' , '$descripcion' , '$genero' , '$ruta2' , '$cadenasave', '$emocion', '$empaque', '$ruta2calmwear')";

    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    
    
   
    header("location:adminproduct.php");

    
   
?>