<?php
    session_start();
    include('../../global/conexion.php');

    $iduser = $_SESSION['iduser'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $apellido = $_POST['apellido'];



    $sql = "UPDATE Direcciones SET nombre = '$nombre', apellido = '$apellido', direccion = '$direccion' WHERE id_user = '$iduser'";
    
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    header('location:pagos2.php');
?>