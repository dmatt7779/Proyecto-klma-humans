<?php
    session_start();
    include('../../global/conexion.php');

    $iduser = $_SESSION['iduser'];
    $telefono = $_POST['telefono'];

    echo $telefono;    
    $sql = "UPDATE Direcciones SET telefono = '$telefono' WHERE id_user = '$iduser'";

    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    header('location:pagos2.php');
?>