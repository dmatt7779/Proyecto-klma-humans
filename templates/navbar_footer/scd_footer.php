<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>KLMA HUMANS</title>
</head>
<body>
<!-- INICIO Footer -->
<footer id="testfooter" class="footer-content">
    <div class="footercontent">
        <div class="footerleft">
            <img src="../assets/img/nav_foot/sonido-activo.png" alt="icono para reproducir musica" id="iconSong">
        </div>

        <audio id="klmaSong">
            <source src="../assets/audio/klma.mp3" type="audio/mp3">
        </audio>

        <div class="footerright">
            <a href="https://api.whatsapp.com/send?phone=+573007106853" target="_blank"><img src="../assets/img/nav_foot/Contactenos.png" alt="logo de contacto"></a>
        </div>
    </div>
</footer>
<!-- FIN Footer -->

    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../assets/js/carrito.js"></script>

    <!-- Script reproducir musica manualmente -->
    <script>

        let klmaSong = document.getElementById("klmaSong")
        let iconSong = document.getElementById("iconSong")

        iconSong.onclick = function() {
            if(klmaSong.paused){
                klmaSong.play();
                iconSong.src = "../assets/img/nav_foot/onda1.gif";
            }else {
                klmaSong.pause();
                iconSong.src = "../assets/img/nav_foot/onda2.gif";
            }
        }

    </script>
</body>
</html>