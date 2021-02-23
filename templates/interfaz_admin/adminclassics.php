<?php
session_start();
include "../../global/conexion.php";
if (!isset($_SESSION['correo'])) {
         
    header("location:../login/login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas KLMA HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<div class="mt-5">
        <div class="container-fluid">
            <form action="guardarclassics.php" class="login-form mb-4" method="POST" enctype="multipart/form-data">
                
                <div class="newdata">
                <input type="text" name="nombre" placeholder="nombre">
            <label for="imagen" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN CLASSICS</label>

                <input type="file" name="imagen" >
                
                </div>

                <div class="introline2 mt-2">
                    <img src="../assets/img/interfaces/admin/Línea Principal.png" alt="Linea gradient">
                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-submit">AGREGAR</button><br>
                </div>
            </form>
        </div>            
    </div>

   
        
            <!-- DIV PARA EL DATATABLE -->
    <div>
        <div class="tableadmin">
        <div class="jumbotrontable">
    <div class="container-fluid">
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>                
                            <th>imagen</th>
                                               
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            
                        </tr>
                    </tfoot>
                <tbody>
                    <?php
        $sentencia = $pdo->prepare("SELECT * FROM classics");
        $sentencia -> execute();
        $listaclassics=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listaclassics as $classics) {  ?>
                    <tr>

                            <td><?php echo $classics['id'] ?></td>
                            <td><?php echo $classics['nombre'] ?></td>
                            <td><?php echo $classics['imagen'] ?></td>
                                                      
                    </tr>
                    <?php } ?>                  
                </tbody>
            </table><!-- FIN DIV PARA EL DATATABLE -->
    </div>
</div>
            </div>
        </div><!-- FIN DIV PARA EL DATATABLE -->
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/js/my.js"></script>
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/librerias/datatables.min.js"></script>
    <script src="../assets/js/mydatatable.js"></script>
    
        <!-- Mostrar y ocultar contraseña-->
    <script type="text/javascript">
        function mostrarPassword(){
            var cambio = document.getElementById("txtPassword");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye');
            }else{
                cambio.type = "password";
                $('.icon').removeClass('fas fa-eye').addClass('fas fa-eye');
            }
            }
    </script>
    
</body>
</html>

