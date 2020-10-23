<?php

require ('../conexion/conexion.php');

    session_start();

            
  $correo = $_POST['correo'];           
  $clave = $_POST['clave']; 
  $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave'";
    
  $ejecutar = mysqli_query($conexion,$sql);  
  $array = mysqli_fetch_array($ejecutar);
    
  if ($array) {
      $_SESSION['correo']   = $usuario;   
      $_SESSION['apodo']   = $array[1];   

      header('location:../index/index.php');
     
      
  }else {

      header('location:login.php');
      ?>
      <script type="text/javascript">alert('perdistes');</script>
      <?php
  }
?>
