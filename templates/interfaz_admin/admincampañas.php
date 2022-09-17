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
    <title>Campañas KLMA HUMANS</title>
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
            <form action="guardarcampaña.php" class="login-form mb-4" method="POST">
                
            

                <div class="newdata">
                    <input type="text" name="campaña" required class="newprofile" placeholder="CAMPAÑA"><br>
                </div>

                <div class="introline2 mt-2">
                    <img src="../assets/img/interfaces/admin/Línea Principal.png" alt="Linea gradient">
                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-submit">ACTIVAR</button><br>
                </div>
            </form>
        </div>            
    </div>
        
            <!-- DIV PARA EL DATATABLE -->
    <div>
        <div class="tableadmin">
        <div class="jumbotrontable">
    <div class="container-fluid">
            <table class="fontTableIntern records_list table-striped table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>Campaña</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Filter..</th>
                        </tr>
                    </tfoot>
                <tbody>
                    <?php
        $sentencia = $pdo->prepare("SELECT * FROM campañas 
        ORDER by idcampañas DESC
        LIMIT 1;");
        $sentencia -> execute();
        $listausuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php foreach($listausuarios as $usuario) {  ?>
                    <tr>

                            <td><?php echo $usuario['campaña'] ?></td>
                          
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

