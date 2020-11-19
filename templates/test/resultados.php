<?php include "../navbar_footer/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLMA' HUMANS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../assets/librerias/flexboxgrid.min.css">


    <!-- Estilo de circle Progress Bar -->
    <style type="text/less">
        @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);
        .radial-progress {
            @circle-size: 105px;
            @circle-background: #BDD5DC;
            @circle-color: #000000;
            @inset-size: 90px;
            @inset-color: #ffffff; /* Fondo del porcentaje */
            @transition-length: 3s;
            @percentage-color: #000000;
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
                            font-weight:    800;
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

    <div class="results text-center">
        <p>RESULTADOS</p>
    </div>

    <div class="container-fluid mt-5">

        <div class="row pr-5 pl-5">
        <!-- Porcentaje 1 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="50">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Porcentaje 2 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="33">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Porcentaje 3 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="77">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Porcentaje 4 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="90">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Porcentaje 5 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="45">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Porcentaje 6 -->
            <div class="col-md2">
                <div class="radial-progress" data-progress="15">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                            <div class="fill fix"></div>
                        </div>
                    </div>

                    <div class="inset">
                        <div class="percentage">
                            <div class="numbers">
                                <span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor de los sentimientos rotados 90°-->
    <div class="containerf container-fluid mt-3">
        <div class="row pr-5 pl-5 text-center">
            <!-- IRA -->
            <div class="resultfeel col-md-2">
                <span class="">IRA</span>
            </div>
            <!-- MIEDO -->
            <div class="resultfeel col-md-2">
                <span class="">MIEDO</span>
            </div>
            <!-- TRISTEZA -->
            <div class="resultfeel col-md-2">
                <span class="">TRISTEZA</span>
            </div>
            <!-- FELICIDAD -->
            <div class="resultfeel col-md-2">
                <span class="">FELICIDAD</span>
            </div>
            <!-- AMOR -->
            <div class="resultfeel col-md-2">
                <span class="">AMOR</span>
            </div>
            <!-- ALEGRÍA -->
            <div class="resultfeel col-md-2">
                <span class="">ALEGRÍA</span>
            </div>
        </div>
    </div>

<!--     <div class="row aboutbtn">
        <div class="mt-5">
            <button class="smooth"><img src="../assets/img/test/Paso.png" alt=""></button>
        </div>
    </div> -->


    <!-- Script y CDN -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js"></script>
    <script type="text/javascript">
        $(function(){
        window = function() {
        $('.radial-progress').attr('data-progress', Math.floor(Math() * 100));
        }
        setTimeout(window, 200);
        $('.radial-progress').click(window);
        });
    </script>

    <!-- Script para aumentar el numero de porcentaje -->
    <!-- <script>
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
    </script> -->

</body>
</html>

<?php include "../navbar_footer/scd_footer.php"; ?>