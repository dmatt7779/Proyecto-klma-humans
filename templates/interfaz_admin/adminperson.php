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
</head>
<body>
<?php include "../navbar_footer/header.php";?>

    <div class="mt-5">
    
        
        <form action="guardarusuario.php" method="POST">

            <input type="text" name="correo" class="login-email" placeholder="CORREO ELECTRÓNICO" required><br><br>             
            <input id="txtPassword" name="contraseña" type="password" class="login-pass" placeholder="CONTRASEÑA" required><br><br>
            <input type="text" name="nickname" required  class="newprofile" placeholder="APODO"><br><br>
            <input type="text" name="rol" required class="newprofile" placeholder="ROL"><br><br>

            <input type="submit" class="btn btn-submit">AGREGAR</input><br>
            
            
            </form>
       

            
        </div>
        
           
       

            <!-- DIV PARA EL DATATABLE -->
        <div>
            <div class="tableadmin">
            <div class="jumbotrontable">
    <div class="container-fluid">
    <!-- DIV PARA EL DATATABLE -->
<!--         <div class="tableadmin"> -->
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Correo</th>
                            <th>Apodo</th>
                            <th>clave</th>
                            <th>rol</th>
                            <th>fecha de creacion</th>
                            <th>accion</th>
                            
                         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            <th>Filter..</th>
                            
                        </tr>
                    </tfoot>
                <tbody>
                    <?php
        $sentencia = $pdo->prepare("SELECT * FROM usuarios");
        $sentencia -> execute();
        $listausuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listausuarios as $usuario) {  ?>
                    <tr>

                            <td><?php echo $usuario['id'] ?></td>
                            <td><?php echo $usuario['correo'] ?></td>
                            <td><?php echo $usuario['apodo'] ?></td>
                            <td><?php echo $usuario['clave'] ?></td>
                            <td><?php echo $usuario['rol'] ?></td>
                            <td><?php echo $usuario['fecha_registro'] ?></td>
                            <td> <form action="borrarusuario.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                            <button class="btn btn-danger"  onclick="myconfirm(event)" type="submit">borrar</button>
                            </form> </td>
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

