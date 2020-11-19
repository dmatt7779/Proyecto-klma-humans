<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas KLMA' HUMANS</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    
        <!-- Beige Section -->
        <div class="containersales">
            <div class="newdata">
                <input type="text" class="newprofile" placeholder="FECHA">
                <input type="text" class="newprofile" placeholder="# PEDIDO">
            </div>

            <div class="btnsales mt-4 mb-4">
                <button class="btn btn-submit">RECIBIDOS</button>
                <button class="btn btn-submit ml-4 mr-4">ENVIADOS</button>
                <button class="btn btn-submit">ENTREGADOS</button>
            </div> 
            
            <div class="introline mb-4 mt-4">
                <img src="../assets/img/interfaces/linea_principal.png" alt="Linea gradient">
            </div>
        </div>

        <div class="operationsec">
            <div class="operationbtn">
                <span style="font-weight: bolder; font-size: 30pt;">AQUI VA LA TABLA</span>
            </div>
        </div>

</body>
</html>

<?php include "../navbar_footer/scd_footer.php";?>