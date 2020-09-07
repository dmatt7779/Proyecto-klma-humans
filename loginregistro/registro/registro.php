<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klma Humans</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="circulo collapse navbar-collapse col-lg-1 col-md-1 col-sm-1" id="navbarNav">
            <div class="nav-item circulo">
              <a class="nav-link" href="#"></a>
            </div>
          </div>
          <div class="nav-item titulo col-lg-7 col-md-7">
            <a class="nav-link" href="#"></a>
          </div>
          <div class="col nav-item col-lg-3 col-md-3 col">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item menu-puntos">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item menu-log">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item menu-candado">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>

    <div class="row">
      <div class="col col-lg-8 offset-2 col-md-8 offset-4 ">
        <div class="img-form">
        </div>
      </div>

    <div class="row">
        <div class="login-form">
          <form action="guardar.php" method="post">
            <div class="col col-xl-12  col-lg-12 col-md-12 form"></div>
              <input type="text" class="login-email" name="correo" placeholder="CORREO ELECTRÓNICO"><br>
              <div class="divojitos">
              <input id="txtPassword" type="password" name="contraseña" class="login-pass" placeholder="CONTRASEÑA">
              <span id="show_password" onclick="mostrarPassword()" class="btn btn-link btn-sm fas fa-eye icon"></span>
              <span id="show_password" onclick="mostrarPassword()" class="btn btn-link btn-sm fas fa-eye icon"></span>
            </div>
        </div>

        <div class="row">
        <input type="text"  name="nickname" placeholder="NICK NAME">
        </div>
			
    <div class="row">
      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="img-barras">
        </div>
      </div>
    </div>

    <button type="submit"  class="btn-submit">REGISTRARME</button>                                 

            <div class="row">
                <a href="../login/login.php" class="back">REGRESAR</a>
            </div>
          </form>
        </div>
      </div>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 hondas-footer" >          
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 logo-footer">
          </div>
        </div>
      </div>
    </footer>
    <?php session_start(); if (isset($_SESSION['creado'])) { ?>
          <script type="text/javascript">
            alert("se creó el correo");
          </script> <?php 
        };    
    ?>




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