<?php
session_start();

include('../../global/conexion.php');


$iduser = $_SESSION['iduser'];
$correo = $_POST['email'];
$newsletter = $_POST['newsletter'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$dep_local = $_POST['dep-local'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$provincia = $_POST['provincia'];
$barrio = $_POST['barrio'];
$total = $_SESSION['total'];
$telefono = $_POST['telefono'];
$savedireccion = $_POST['savedireccion'];



$sql1 = "SELECT * FROM Direcciones WHERE id_user = '$iduser'";


$sentencia1 = $pdo->prepare($sql1);
$sentencia1->execute();
$alreadydireccion = $sentencia1->fetchAll(PDO::FETCH_ASSOC);
// newsletter
if ($newsletter == "true") {
    $sql2 = "SELECT * from suscripcion where correo = '$correo'";

    $sentencia2 = $pdo->prepare($sql2);
    $sentencia2->execute();
    $register2 = $sentencia2->fetchAll(PDO::FETCH_ASSOC);
    if (!isset($register2[0]['id'])) {
        $sql = "INSERT INTO suscripcion (correo) VALUES ('$correo')";

        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}
// newsletter
if($direccion == null){
    header('location:pagos1.php');
}
if($savedireccion == "true"){
   
    $sql = "UPDATE usuarios SET has_direccion = true WHERE id = $iduser" ;

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);

}

if ($alreadydireccion) {

    $sql2 = "INSERT INTO `Direcciones`(`id_user`, `nombre`, `apellido`, `direccion`, `dep-local`, `ciudad`, `pais`, `provincia`, `barrio`, `telefono`,`correo`) VALUES ('$iduser','$nombres','$apellidos','$direccion','$dep_local','$ciudad','$pais','$provincia','$barrio','$telefono','$correo')";

    $sentencia2 = $pdo->prepare($sql2);
    $sentencia2->execute();
}else{

    $sql2 = "DELETE FROM Direcciones WHERE id_user = '$iduser'";

    $sentencia2 = $pdo->prepare($sql2);
    $sentencia2->execute();

    $sql3 = "INSERT INTO `Direcciones`(`id_user`, `nombre`, `apellido`, `direccion`, `dep-local`, `ciudad`, `pais`, `provincia`, `barrio`, `telefono`,`correo`) VALUES ('$iduser','$nombres','$apellidos','$direccion','$dep_local','$ciudad','$pais','$provincia','$barrio','$telefono','$correo')";

    $sentencia3 = $pdo->prepare($sql3);
    $sentencia3->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body onload="pagos2()">

    <form action="pagos2.php" method="post" name="pagos2">
        <input type="hidden" name="total" value="<?php echo $total ?>">
    </form>

    <script>
        function pagos2() {
            document.pagos2.submit()
        }
    </script>
</body>

</html>