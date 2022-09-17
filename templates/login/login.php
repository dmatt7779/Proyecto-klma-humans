<?php
    include "../../global/conexion.php";
    session_start();
            if (isset($_SESSION['correo'])) {
                switch ($_SESSION['rol']) {
                    case '3':
                        header("location:../interfaz_cliente/clienteintro.php");
                        break;
                    case '2':
                        header("location:../interfaz_vendedor/vendintro.php");
                        break;
                    case '1':
                        header("location:../interfaz_admin/adminintro.php");
                        break;
                    default:
                        # code...
                        break;
                }
            }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klma Humans</title>
  <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="../assets/style/style.css"> -->
    <link rel="stylesheet" href="../assets/style/style.css?v=<?php echo(rand()); ?>" />
</head>

<body>
<?php include "../navbar_footer/header.php";?>

    <div class="container-fluid contentlogin">
        <div class="contentlogoform">
                <div class="img-form"></div>
        </div>

        <form class="login-form" action="logueo.php" method="POST">

            <div class="logpass">
                <input type="text" name="email" class="login-email" placeholder="CORREO ELECTRÓNICO"><br>
                <div class="divshowhide logpassregister">
                    <input id="txtPassword" type="password" name="password" class="login-pass" placeholder="CONTRASEÑA"><br>
                    <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                </div>
            </div>

            <div class="forget-pass text-center mt-1">
                <a href="recuperar.php">OLVIDÉ MI CONTRASEÑA</a>
            </div>
            
            <div class="mt-4 mb-4">
                <div class="img-barras"></div>
            </div>

            <button class="btn btn-submit" type="submit">INGRESAR</button>                                

            <div class="sign-up text-center">
                <a href="../registro/registro.php">REGISTRARME</a>
            </div>
        </form>
    </div>

    <!-- JS, Popper.js, and jQuery -->

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>

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

<?php include "../navbar_footer/scd_footer.php"  ?>