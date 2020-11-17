<?php
    require_once( 'question.php' );

    //Obtener valores enviados desde ajax
    $Id = trim( $_REQUEST[ 'Question' ] );

    //Destruir variables
    unset( $Resultado );

    //Obtener el Index del array según el valor.
    $Indice = array_search( $Id, array_column( Question, 'id' ) );

    if( $Indice !== false ){
        $Replys = Question[ $Indice ][ 'replys' ];
        shuffle( $Replys );

        $Result = [
            'id' => Question[ $Indice ][ 'id' ],
            'title' => Question[ $Indice ][ 'title' ],
            'question' => Question[ $Indice ][ 'question' ],
            'value' => Question[ $Indice ][ 'value' ],
            'replys' => $Replys
        ];
    } else {
        $Result = 'La pregunta no existe en KLMHumans';
    }

    //Enviar respuesta con formato json_encode
    echo json_encode( $Result );
?>