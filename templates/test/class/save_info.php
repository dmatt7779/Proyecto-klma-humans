<?php
    session_start();
    $Data = $_REQUEST[ 'Data' ];
    $Question = explode( '-', $Data );
    $Question = array_filter( $Question, 'strlen' );
    
    foreach( $Question as $Key => $Value ){
        $Result[] = explode( '|', $Value );
    }

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
            $Result [] = [ 'Theme' => $Row[ 0 ], 'Value' => $Row[ 1 ] ];
        }
    }
echo "<pre>"; print_r( $Result );
//TestReply Nombre de Variable
    if( isset( $_SESSION[ 'isLogin' ] ) ){
        //Aqui se guardar los valores si la variable de Session Exies
    } 
?>