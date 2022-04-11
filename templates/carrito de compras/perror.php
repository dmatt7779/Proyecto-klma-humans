<?php
session_start();
include "../../global/conexion.php";
$iduser = $_SESSION['iduser'];
$user = $pdo->prepare("SELECT * FROM usuarios where id = '$iduser'");
$user -> execute();
$userInfo=$user->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />
    
    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>PEDIDO ERROR</title>
</head>
<body>
<section>
<!-- Image -->
    <div class="text-center">
        <div class="stateTransactionImg"><img src="../assets/img/nav_foot/Logo.png" alt=""></div>
    </div>
    <div class="footerbg text-center">
        <div id="footerbg2"></div>
    </div>

<!-- Black Container -->
    <div id="mainfooter">
        <div class="stateTransaction">
            <div class="titleTransactionError">    
                <h1>ERROR</h1>
            </div>
            <div class="owner">    
                <h2><?php echo strtoupper($userInfo[0]['apodo'])?></h2>
            </div>
            <div class="textStateTransaction">    
                EN NOMBRE DE KLMA HUMANS QUEREMOS AGRADECERTE INMENSAMENTE POR LA CONFIANZA DEPOSITADA EN NUESTROS PRODUCTOS. LASTIMOSAMENTE TU TRANSACCIÓN HA PRESENTADO UN ERROR.<br><br>
                TE INVITAMOS A REVISAR TUS DATOS.
            </div>
            <div class="thanksCustom">    
               MUCHAS GRACIAS
            </div>
            <div class="backStateTrans">    
            <a href="../interfaz_cliente/clienteintro.php"><button class="btn btnBack">VOLVER</button></a>


            </div>
            <hr class="footerhr3">
        </div>
    </div>
    
    <div class="footer-content">
        <div class="beigeLine"></div>
    </div>

</section>
</body>
</html>