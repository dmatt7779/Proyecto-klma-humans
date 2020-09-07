<?php

   $servidor = "localhost";
   $usuario = 'jerson';
   $contraseña = "jerson123";
   $bd = "klma_humans";
   $conexion = mysqli_connect($servidor,$usuario,$contraseña,$bd);   
   $conexion->set_charset("utf8");
 
    

?>