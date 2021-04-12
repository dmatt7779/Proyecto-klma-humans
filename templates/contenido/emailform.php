<?php 
    $error = '';

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    //Validación para Nombre
    if (empty($_POST["nombre"])) {
        $error = 'Ingresa un nombre </br>';
    }else {
        $nombre = $_POST["nombre"];
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }

    //Validación para Email
    if (empty($_POST["email"])) {
        $error .= 'Ingresa un email válido</br>';
    }else {
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error .= 'Ingresa un Email válido </br>';
        }else {
            $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        }
    }

    //Validación para Mensaje
    if (empty($_POST["mensaje"])) {
        $error .= 'Ingresa un mensaje </br>';
    }else {
        $mensaje = $_POST["mensaje"];
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    }

    //Cuerpo del email que se enviará al correo electrónico

    $emailbd = 'Nombre: '.$nombre.'\n';
    $emailbd.= 'E-mail: '.$email.'\n';
    $emailbd.= 'Mensaje: '.$mensaje.'\n';

    //Correo Electrónico de destino

    $enviarA = 'dmatt7779@gmail.com';
    $asunto = 'Nuevo mensaje desde KLMA HUMANS';

    //Enviar Correo

    if ($error == '') {
        $success = mail($enviarA, $asunto, $emailbd, 'From: '.$email);
        echo 'exito';
    }else {
        echo $error;
    }
?>