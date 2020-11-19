<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<?php

include "/opt/lampp/htdocs/Klma-humans/global/config.php";
include "/opt/lampp/htdocs/Klma-humans/global/conexion.php";

session_start();
?>
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
                <a class="nav-link" href="../Rejillas_generales/loungewear.php"></a>
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


    <!-- Beige Section -->
    <div class="containerbeige">
        <div class="usercounts">
            HOLA <?php echo $_SESSION['apodo'];  ?>
        </div>

        <div class="introline mt-4">
            <a href="../login/login1/salir.php">CERRAR SESIÓN</a>
        </div>

        <div class="btnsales mt-3 mb-2">
            <button class="btn btn-submit">SUSCRIBIRME</button>
        </div> 

        <div class="introline">
            <a href="#">CANCELAR SUSCRIPCIÓN</a>
        </div>
        
        <div class="introline mt-4">
            <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
        </div>
    </div>

    <!-- AQUI VA LA TABLA -->
    <div class="operationsec">
        <div class="operationbtn">
            <span style="font-weight: bolder; font-size: 30pt;">AQUI VA LA TABLA</span>
        </div>
    </div>
    
</body>
</html>