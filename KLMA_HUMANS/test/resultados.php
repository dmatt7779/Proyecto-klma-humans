<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA' HUMANS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/librerias/flexboxgrid.min.css">

</head>
<body>

<div class="results">
    <p>RESULTADO</p>
</div>

<div class="percents">
    <!-- Porcentaje 1 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number1">20%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Porcentaje 2 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number2">10%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Porcentaje 3 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number3">25%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Porcentaje 4 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number4">10%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Porcentaje 5 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number5">35%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Porcentaje 6 -->
    <div class="test">
        <div class="circular">
            <div class="inner"></div>
            <div class="number6">0%</div>
                <div class="circle">
                    <div class="bar left">
                        <div class="progressbar"></div>
                    </div>
                    <div class="bar right">
                        <div class="progressbar"></div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Contenedor de los sentimientos rotados 90° -->
<div class="feelings">
    <div class="containerfeel">
            <div class="rotate">
                <span class="">IRA</span>
            </div>

            <div class="rotate">
                <span class="">MIEDO</span>
            </div>

            <div class="rotate">
                <span class="">TRISTEZA</span>
            </div>

            <div class="rotate">
                <span class="">FELICIDAD</span>
            </div>

            <div class="rotate">
                <span class="">AMOR</span>
            </div>

            <div class="rotate">
                <span class="">ALEGRÍA</span>
            </div>
    </div>
</div>



<!-- Script para aumentar el numero de porcentaje -->
<script>
    const number1 = document.querySelector(".number1");
    let counter1 = 0;
    setInterval(() => {
        if (counter1 == 20){
            clearInterval();
        }else {
            counter1++;
            number1.textContent = counter1 + "%";
        }
    }, 80);

    const number2 = document.querySelector(".number2");
    let counter2 = 0;
    setInterval(() => {
        if (counter2 == 10){
            clearInterval();
        }else {
            counter2+=1;
            number2.textContent = counter2 + "%";
        }
    }, 80);

    const number3 = document.querySelector(".number3");
    let counter3 = 0;
    setInterval(() => {
        if (counter3 == 25){
            clearInterval();
        }else {
            counter3+=1;
            number3.textContent = counter3 + "%";
        }
    }, 80);

    const number4 = document.querySelector(".number4");
    let counter4 = 0;
    setInterval(() => {
        if (counter4 == 10){
            clearInterval();
        }else {
            counter4+=1;
            number4.textContent = counter4 + "%";
        }
    }, 80);

    const number5 = document.querySelector(".number5");
    let counter5 = 0;
    setInterval(() => {
        if (counter5 == 35){
            clearInterval();
        }else {
            counter5+=1;
            number5.textContent = counter5 + "%";
        }
    }, 80);

    const number6 = document.querySelector(".number6");
    let counter6 = 0;
    setInterval(() => {
        if (counter6 == 0){
            clearInterval();
        }else {
            counter6+=1;
            number6.textContent = counter6 + "%";
        }
    }, 0);
</script>

</body>
</html>

<?php include "../navbar_footer/scd_footer.php"; ?>