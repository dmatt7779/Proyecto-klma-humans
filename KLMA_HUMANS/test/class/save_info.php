<?php
    session_start();
    $Data = json_decode( $_REQUEST[ 'Data' ], true );

    //Ordenar array por tema.
    foreach( $Data as $Key => $Value ){
        $Info[ $Key ]  = $Value[ 'Theme' ];
    }
    array_multisort( $Info, SORT_DESC, $Data );

    //Sumar valores de acuerdo al tema.
    $Result = [];
    foreach( $Data as $Row ){
        $Repeat = false;

        for( $i = 0; $i < count( $Result ); $i++ ){
            if( $Result[ $i ][ 'Theme' ] === $Row[ 'Theme' ] ){
                $Result[ $i ][ 'Value' ] += $Row[ 'Value' ];
                $Repeat = true;
                break;
            }
        }

        if( !$Repeat ){
            $Result [] = [ 'Theme' => $Row[ 'Theme' ], 'Value' => $Row[ 'Value' ] ];
        }
    }
echo "<pre>"; print_r( $Result );
//TestReply Nombre de Variable
    if( isset( $_SESSION[ 'isLogin' ] ) ){
        //Aqui se guardar los valores si la variable de Session Exies
    } else {
        //Aqui se retorna el array para ser guardado en session_storage.
    }
?>