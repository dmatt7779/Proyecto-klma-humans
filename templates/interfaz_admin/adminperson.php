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
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

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
            <form action="guardarusuario.php" class="login-form mb-4" method="POST">
                
                <div class="logpass">
                    <input type="text" name="correo" class="login-email" placeholder="CORREO ELECTRÓNICO" required> 
                    <div class="divshowhide">          
                        <input id="txtPassword" type="password" name="contraseña" class="login-pass" placeholder="CONTRASEÑA">
                        <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                        <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    </div>
                </div><br>

                <div class="newdata">
                    <input type="text" name="nickname" required  class="newprofile" placeholder="APODO"><br>
                    <select class="newprofile" name="rol">
                        <option value="1"selected>1 Admin</option>
                        <option value="2">2 Vendedor</option>
                        <option value="3">3 Cliente</option>
                    </select>
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
                            <th>Correo</th>
                            <th>Apodo</th>
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
                            <td><?php echo $usuario['rol'] ?></td>
                            <td><?php echo $usuario['fecha_registro'] ?></td>
                            <td> <form action="borrarusuario.php" method="post" class="text-center">
                            <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                            <button class="btn"  onclick="myconfirm(event)" type="submit"> <i class="far fa-trash-alt"></i></button>
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

