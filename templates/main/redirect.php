<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include ('../../global/conexion.php');

    $sentencia = $pdo->prepare("SELECT tipologia_id
    FROM productos
    ORDER by ID DESC
    LIMIT 1");
    $sentencia->execute();
    $tipologia = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  


    switch ($tipologia[0]['tipologia_id']) {
        case '1':
            header('location:../Rejillas_generales/loungewear.php');

            break;
        case '2':
            header('location:../Rejillas_generales/calmwear.php');


            break;

        case '3':
            header('location:../Rejillas_generales/Transition.php');

            break;
        
        default:
            # code...
            break;
    }
   
    
   
   
    
    
?>