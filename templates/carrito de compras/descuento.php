<?php
session_start();

include('../../global/conexion.php');

$iduser = $_SESSION['iduser'];
$codigo = $_POST['codigo'];

$sql1 = "SELECT * FROM Direcciones WHERE id_user = '$iduser'";


$sentencia1 = $pdo->prepare($sql1);
$sentencia1->execute();
$alreadydireccion = $sentencia1->fetchAll(PDO::FETCH_ASSOC);