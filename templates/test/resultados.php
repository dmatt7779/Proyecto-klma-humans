<?php
session_start();
include "../../global/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA' HUMANS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css ">


    <!-- Estilo de circle Progress Bar -->
    <style type="text/less">
        @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);
        .radial-progress {
            @circle-size: 105px;
            @circle-background: #969797;
            @circle-color: #000000;/* Barra oscura */
            @inset-size: 90px;
            @inset-color: #ffffff; /* Fondo del porcentaje */
            @transition-length: 5s;
            @percentage-color: #000000; /* Porcentajes */
            @percentage-font-size: 17px;
            @percentage-text-width: 57px;
            margin: 50px;
            width:  @circle-size;
            height: @circle-size;
            background-color: @circle-background;
            border-radius: 50%;
            .circle {
                .mask, .fill {
                    width:    @circle-size;
                    height:   @circle-size;
                    position: absolute;
                    border-radius: 50%;
                }
                .mask, .fill {
                    -webkit-backface-visibility: hidden;
                    transition: -webkit-transform @transition-length;
                    transition: -ms-transform @transition-length;
                    transition: transform @transition-length;
                    border-radius: 50%;
                }
                .mask {
                    clip: rect(0px, @circle-size, @circle-size, @circle-size/2);
                    .fill {
                        clip: rect(0px, @circle-size/2, @circle-size, 0px);
                        background-color: @circle-color;
                    }
                }
            }
            .inset {
                width:       @inset-size;
                height:      @inset-size;
                position:    absolute;
                margin-left: (@circle-size - @inset-size)/2;
                margin-top:  (@circle-size - @inset-size)/2;
                background-color: @inset-color;
                border-radius: 50%;
                .percentage {
                    height:   @percentage-font-size;
                    width:    @percentage-text-width;
                    overflow: hidden;
                    position: absolute;
                    top:      (@inset-size - @percentage-font-size) / 2;
                    left:     (@inset-size - @percentage-text-width) / 2;
                    line-height: 1;
                    .numbers {
                        margin-top: -@percentage-font-size;
                        transition: width @transition-length;
                        span {
                            width:          @percentage-text-width;
                            display:        inline-block;
                            vertical-align: top;
                            text-align:     center;
                            font-weight:    600;
                            font-size:      @percentage-font-size;
                            font-family:    "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
                            color:          @percentage-color;
                        }
                    }
                }
            }
            @i: 0;
            @increment: 180deg / 100;
            .loop (@i) when (@i <= 100) {
                &[data-progress="@{i}"] {
                    .circle {
                        .mask.full, .fill {
                            -webkit-transform: rotate(@increment * @i);
                            -ms-transform: rotate(@increment * @i);
                            transform: rotate(@increment * @i);
                        }   
                        .fill.fix {
                            -webkit-transform: rotate(@increment * @i * 2);
                            -ms-transform: rotate(@increment * @i * 2);
                            transform: rotate(@increment * @i * 2);
                        }
                    }
                    .inset .percentage .numbers {
                        width: @i * @percentage-text-width + @percentage-text-width;
                    }
                }
                .loop(@i + 1);
            }
            .loop(@i);
        }
    </style>

</head>

<body>
    <?php include "../navbar_footer/header.php"; ?>

    <div class="results text-center">
        <p>RESULTADOS</p>
    </div>

    <div class="container-fluid mt-5">
        <div class="row pr-5 pl-5" id="divGraph"></div>
    </div>

    <!-- Contenedor de los sentimientos rotados 90°-->
    <div class="containerf container-fluid mt-3">
        <div class="row pr-5 pl-5 text-center" id="divLetter"></div>
    </div>

    <div class="row aboutbtn">
        <div class="mt-5">
            <button class="smooth"><img onclick="submit()" src="../assets/img/test/abajo.gif" alt=""></button>
        </div>
    </div>
    <form action="postresult.php" name="testform" method="post">
        <input type="hidden" name="emocion" id="emocion">
    </form>

    <!-- Script y CDN -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js"></script> -->
    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/less.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //$( '#divLetter' ).html( '' );
            //$( '#divGraph' ).html( '' );
            createGraph();
            sendemotion();
        });

        function createGraph() {
            var Graph = '',
                Letter = '';
            let Val = 0,
                Deg = 0;
            const Data = sessionStorage.getItem('ResultT'),
                Question = Data.split('-').filter(Boolean);

            $.each(Question, function(i, Value) {
                const Info = Value.split('|');

                if (Val !== 0) {
                    Deg = ((Val / 100) * 360);
                }

                Graph += '<div class="col-md2" style="position: relative;">';
                Graph += '<div class="radial-progress" data-progress="' + Info[1] + '" style="transform: rotate(' + Deg + 'deg)">';
                Graph += '<div class="circle">';
                Graph += '<div class="mask full">';
                Graph += '<div class="fill"></div>';
                Graph += '</div>';
                Graph += '<div class="mask half">';
                Graph += '<div class="fill"></div>';
                Graph += '<div class="fill fix"></div>';
                Graph += '</div>';
                Graph += '</div>';

                Graph += '<div class="inset"></div>';
                Graph += '</div>';
                Graph += '<span style="position: absolute; top: 48%; left: 50%; transform: translate(-50%, -55%); font-size: 15pt;">' + Info[1] + '%</span>';
                Graph += '<div class="resultfeel">' + Info[0] + '</div>';
                Graph += '</div>';

                Val = Val + parseInt(Info[1]);
            });

            /*$.each( Question, function( i, Value ) {
                const Info = Value.split( '|' );

                Letter += '<div class="resultfeel col-md-2">';
                    Letter += '<span class="">' + Info[ 0 ] + '</span>';
                Letter += '</div>';
            } );*/

            //$( '#divLetter' ).html( Letter );
            $('#divGraph').html(Graph);
        }

        function sendemotion() {
            let result = sessionStorage.getItem('ResultT');

            var vec_barra = result.split('-');
            vec_barra.pop();

            let resultado = vec_barra.map(e => e.replace(/'|'/g, ':'));
            let convert = [];
            var mayor = 0;
            for (i in resultado) {

                convert.push(resultado[i].split('|'))



            }

            for (y in convert) {

                if (parseInt(convert[y][1]) > mayor) {
                    mayor = parseInt(convert[y][1]);
                    emocionselected = convert[y][0];
                }


            }

            
            document.getElementById('emocion').value = emocionselected.toLowerCase();

        }

        function submit(){
            document.testform.submit();
        }
    </script>

</body>

</html>

<?php include "../navbar_footer/footer.php"; ?>