<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include '../conexion/conexion.php';

        session_start();
        $usuario = $_SESSION['correo'];
        $apodo = $_SESSION['apodo'];
        if (!isset($usuario)) {
            header("location:../login/login.php");
        }
        
        
?>
    <h1>logueado mi papaya</h1>
    <h1>hola <?php
       echo $apodo;        
?> </h1>
    <br><br><br>
    <a href="../login/salir.php">abrirse</a>
</body>
</html>