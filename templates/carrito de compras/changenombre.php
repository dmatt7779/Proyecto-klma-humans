<?php
    session_start();
    include('../../global/conexion.php');

    $iduser = $_SESSION['iduser'];
    $nombre = $_POST['nombre'];

    $sql = "UPDATE Direcciones SET nombre = '$nombre' WHERE id_user = '$iduser'";

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    header('location:pagos2.php');
?>