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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css ">
</head>
<body>
<?php include "../navbar_footer/header.php";?>

<!-- Home Questions -->
    <div id="divQuestion"></div>
<!-- End Questions -->

<?php include "../navbar_footer/scd_footer.php" ?>

    <!-- JS, Popper.js, and jQuery -->
<script src="../assets/librerias/jquery-3.5.1.min.js"></script>
<script src="../assets/librerias/popper.min.js"></script>
<script src="function.js"></script>
<script>
    //Script para pasar preguntas por capas
    $( document ).on( 'click', 'button.smooth', function() {
        let Id = $( this ).parent().parent().attr( 'id' ),
            NextId = parseInt( Id ) + 1;
            KlmHumans.saveSession( $( '#divQuestion' ).find( 'div.answ' ).children( 'div.active' ) );
            if( NextId <= 6 ){ 
                KlmHumans.existsQuestion( NextId );
            } else {
                KlmHumans.saveQuestion();
            }
    });

    //Script para seleccionar Respuestas
    $( document ).on( 'click', '#selectanswer1 > .testselect1 > .testselect11', function() {
        $( '.testselect1' ).removeClass( 'select-wr active' );
        $( '.testselect11' ).removeClass( 'select-deep' );
        $( this ).parent().addClass( 'select-wr active' );
        $( this ).addClass( 'select-deep' );
    } );

    $( document ).on( 'click', '#selectanswer2 > .testselect2 > .testselect22', function() {
        $( '.testselect2' ).removeClass( 'select-wr2 active' );
        $( '.testselect22' ).removeClass( 'select-deep2' );
        $( this ).parent().addClass( 'select-wr2 active' );
        $( this ).addClass( 'select-deep2' );  
    } );

    $( document ).on( 'click', '#selectanswer3 > .testselect3 > .testselect33', function() {
        $( '.testselect3' ).removeClass( 'select-wr3 active' );
        $( '.testselect33' ).removeClass( 'select-deep3' );
        $( this ).parent().addClass( 'select-wr3 active' );
        $( this ).addClass( 'select-deep3' );
    } );

    $( document ).on( 'click', '#selectanswer4 > .testselect4 > .testselect44', function() {
        $( '.testselect4' ).removeClass( 'select-wr4 active' );
        $( '.testselect44' ).removeClass( 'select-deep4' );
        $( this ).parent().addClass( 'select-wr4 active' );
        $( this ).addClass( 'select-deep4' );
    } );

    $( document ).on( 'click', '#selectanswer5 > .testselect5 > .testselect55', function() {
        $( '.testselect5' ).removeClass( 'select-wr5 active' );
        $( '.testselect55' ).removeClass( 'select-deep5' );
        $( this ).parent().addClass( 'select-wr5 active' );
        $( this ).addClass( 'select-deep5' );
    } );

    $( document ).on( 'click', '#selectanswer6 > .testselect6 > .testselect66', function() {
        $( '.testselect6' ).removeClass( 'select-wr6 active' );
        $( '.testselect66' ).removeClass( 'select-deep6' );
        $( this ).parent().addClass( 'select-wr6 active' );
        $( this ).addClass( 'select-deep6' );
    } );
</script>


</body>
</html>