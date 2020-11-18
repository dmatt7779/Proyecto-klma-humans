<?php include "../navbar_footer/header.php";?>

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

<!-- Home Questions -->
    <div id="divQuestion"></div>
<!-- End Questions -->



    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
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
    } );

    //Script para seleccionar tallas
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