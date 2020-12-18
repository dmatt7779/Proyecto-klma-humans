<?php
    session_start();
    $Data = $_REQUEST[ 'Data' ];
    $Question = explode( '-', $Data );
    $Question = array_filter( $Question, 'strlen' );
    
    foreach( $Question as $Key => $Value ){
        $Result[] = explode( '|', $Value );
    }

    //Array de Emociones
    $Emosiones = [ 'Felicidad', 'Miedo', 'Amor', 'Ira', 'Alegria', 'Tristeza' ];

    //Ordenar array por tema.
    foreach( $Result as $Key => $Value ){
        $Info[ $Key ]  = $Value[ 0 ];
    }
    array_multisort( $Info, SORT_DESC, $Result );

    //Sumar valores de acuerdo al tema.
    $Data = $Result;
    $Result = [];
    foreach( $Data as $Row ){
        $Repeat = false;

        for( $i = 0; $i < count( $Result ); $i++ ){
            if( $Result[ $i ][ 'Theme' ] === $Row[ 0 ] ){
                $Result[ $i ][ 'Value' ] += $Row[ 1 ];
                $Repeat = true;
                break;
            }
        }

        if( !$Repeat ){
            $Result[] = [ 'Theme' => $Row[ 0 ], 'Value' => $Row[ 1 ] ];
            $Emo[] = $Row[ 0 ];
        }
    }

    //Validar Emosion

        $End = '';
        $Count = count( $Result );
        for( $i = 0; $i < $Count; $i++ ){
            $End .= $Result[ $i ][ 'Theme' ] . '|' . $Result[ $i ][ 'Value' ] . '-';
        }

        $NArray = array_diff( $Emosiones, $Emo );
        foreach( $NArray as $Value ){
            $End .= $Value . '|' . 0 . '-';
        }

//TestReply Nombre de Variable
    if( isset( $_SESSIO11N[ 'isLogin' ] ) ){
        //Aqui se guardar los valores si la variable de Session Exies
    } 

    echo json_encode( $End ); 
?>