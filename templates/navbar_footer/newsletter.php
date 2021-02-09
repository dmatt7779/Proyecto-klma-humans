<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>KLMA HUMANS</title>
</head>
<body>

<!-- NEWSLETTER -->
<div>
    <div class="modal" tabindex="-1" id="modal1"  data-backdrop="false" data-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content inferior" style="background: transparent!important; border:none!important;">
                <div class="modal-body p-0">
                    <div id="imagenews">
                        <div class="newscontent">
                            <div class="conectednews">
                                <h6>CONECTEMONOS</h6>
                                <input type="text" class="suscribenews mt-3" placeholder="CORREO ELECTRÓNICO">
                                <div class="newsletter mt-3">
                                    <span class="text-dark">RECIBIRAS NOTICIAS Y OFERTAS EXCLUSIVAS</span>
                                    <button class="btn btnnewsp">SUSCRIBIRSE</button>
                                </div>
                            </div>
                            <img src="../assets/img/nav_foot/newsletter.png" alt="" class="imagenews2">
                            <button type="button" class="close close-news" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIN NEWSLETTER -->

<!-- JS, Popper.js, and jQuery -->
<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
<script src="../assets/librerias/popper.min.js"></script>
<script src="../assets/librerias/bootstrap.min.js"></script>
<script>
    $( document ).ready(function(){
        setTimeout( function(){
            $('#modal1').modal('toggle');
        } , 5000 );
    });
</script>
</body>
</html>