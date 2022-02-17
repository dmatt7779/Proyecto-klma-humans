<?php 
    include "../../global/conexion.php";

    $email = $_POST['email'];
    $token = $_POST['token'];
    $codigo = $_POST['codigo'];
    $sentencia = $pdo->prepare("SELECT * FROM passwords WHERE email='$email' AND token='$token' AND codigo=$codigo");
    $sentencia->execute();
    $res = $sentencia->fetchAll(); 

    /* echo "<pre>"; print_r($res); */

    if(count($res) > 0){

        $fecha = $res[0]['fecha'] ;
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;

       /* if($minutos > 10 ){
            echo "token vencido";
        }else{
            echo "todo correcto";
        } */
        $correcto=true;
    }else{
        $correcto=false;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambio De Password Klma humans</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<div class="container-fluid contentlogin">
    <div class="contentlogoform">
            <div class="img-form"></div>
    </div>
    <?php if($correcto == true){ ?>
        <form action="passwordchanged.php" class="login-form" method="POST">
            <div class="logpass">
                <div class="divshowhide logpassregister">
                    <input id="txtPassword" type="password" name="newpwd" class="login-email" placeholder="NUEVA CONTRASEÑA">
                    <span style="position: absolute;" id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    <span id="show_password" onclick="mostrarPassword()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                </div>
                <div class="divshowhide logpassregister">
                    <input id="txtPassword2" type="password" name="confpwd" class="login-pass" placeholder="CONFIRMAR CONTRASEÑA">
                    <span id="show_password2" onclick="mostrarPassword2()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    <span id="show_password2" onclick="mostrarPassword2()" class="btn btn-eye btn-sm fas fa-eye icon"></span>
                    <input type="hidden" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
                
            <div class="contentlogoform mt-4 mb-4">
                <div class="img-barras"></div>
            </div>

            <div class="recoverypwd">
                <button style="letter-spacing: .12222rem;" class="btn btn-submit" type="submit">CAMBIAR CONTRASEÑA</button>  
            </div>
        </form>
    <?php }else{ ?>
        <div class="alert alert-danger" >Código incorrecto o vencido</div>
    <?php } ?>

    <div class="sign-up text-center mt-3">
        <a href="recuperar.php">INTENTARLO NUEVAMENTE</a>
    </div>
</div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="../assets/librerias/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

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

        function mostrarPassword2(){
            var cambio = document.getElementById("txtPassword2");
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