<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="css/glagn2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/undraw_working_late_.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css-master/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css-master/styles.css" />
    <script src="js/jquery-3.6.1.min.js"></script>

</head>

<body>
    <div class ="wrapper">
        <div class="menu">
        <a><img src="img/icon.png" alt="" class="menu-btn"></a>
            <nav class="menu-list">
                <a href="index.php">Главная</a>
                <a href="raspp.php">Расписание</a>
                <a href="price.php">Прайс-лист</a>
                <a href="vhod1.php">Войти в систему</a>
            </nav>
        </div>

        <div class="content">

           <!Параллакс эффект>
            <section class="main">
               <div class="motiv">
                   <h1>Построй тело своей мечты!</h1>
                   <p style="text-align: center;"> А наш фитнес-клуб вам в этом поможет</p>
               </div>
            </section>
            <!................>


            <section class="news" >
                <div class="text1"><b><span style="">~ КЛУБ ДЛЯ ОСОЗНАННОГО ФИТНЕСА ~</span></b></div>



                <div style="display: flex; margin-left: 50px; margin-top: 80px  ">

                    <div style="height: 50px;">
                        <img class="opis2" style="margin-left: 100px"  src="/kura/img/halat.png" alt="">
                        <div style=" text-align:center;display: block; margin-top: 20px; position: center; font-size: 20px;margin-left: 10px" >2 сауны, хаммам,<br>
                            зона гидромассажа, аквабайк</div>
                    </div>
                    <div style="height: 50px;">
                        <img class="opis2" style="margin-left: 100px" src="https://cdn-icons-png.flaticon.com/512/4110/4110358.png" alt="">
                        <div  style="display: inline-block;  text-align:center;margin-top: 20px; position: center; font-size: 20px; margin-left: 40px" >Детский клуб<br>
                            от 3 до 14 лет</div>
                    </div>
                    <div style="height: 50px;">
                        <img class="opis2"  style="margin-left: 145px; margin-right: 50px" src="https://cdn-icons-png.flaticon.com/512/3503/3503845.png" alt="">
                        <div style="display: inline-block; text-align:center; margin-top: 20px;position: center; font-size: 20px; margin-left: 10px" >
                            2 зала групповых программ и<br> CYCLE класс с велотренажерами<br>
                            и INBODY тестирование</div>
                    </div>
                    <div style="height: 50px;">
                        <img class="opis2" style="margin-left: 140px" src="https://cdn-icons-png.flaticon.com/512/2540/2540142.png" alt="">
                        <div style="display: inline-block;  text-align:center; margin-top: 20px;position: center; font-size: 20px; margin-left: 10px" >
                            Тренировки с инновационными <br> датчиками пульса DexBee</div>
                    </div>
                </div>
            </section>

            <section class="contacts">
                <div style="margin-top: 50px;margin-left: 70px;"><span class="text1" style="text-align: center"><b>WOW-ФИТНЕС <br>ВЫСОКОГО УРОВНЯ</b></span>
                        <div class="opis3">
                            Фитнес-пространство для искушённых: более 50 групповых
                            занятий - от йоги до танцевальных и силовых, тренажёрный зал,
                            функциональные тренировки и зона единоборств, кардио-кинотеатр,
                            студия сайкла и пилатеса<br>
                            Не оставит вас равнодушными и зона RELAX: бассейн с джакузи,
                            хаммам, сауна и массаж. Такая атмосфера позволит не только
                            добиться результатов, но и получить удовольствие от процесса
                        </div>
                </div>

                        <style>
                            * {box-sizing: border-box;}
                            body {font-family: Verdana, sans-serif;}
                            .mySlides {display: none;}
                            img {vertical-align: middle;}

                            /* Slideshow container */
                            .slideshow-container {
                                max-width: 1000px;
                                position: relative;
                                margin: auto;
                            }


                            /* The dots/bullets/indicators */
                            .dot {
                                height: 15px;
                                width: 15px;
                                margin: 0 2px;
                                background-color: rgba(0, 0, 0, 0);
                                border-radius: 50%;
                                display: flex;
                                transition: background-color 0.6s ease;
                            }

                            .active {
                                background-color: rgba(0, 0, 0, 0);
                            }

                            /* Fading animation */
                            .fade {
                                -webkit-animation-name: fade;
                                -webkit-animation-duration: 3s;
                                animation-name: fade;
                                animation-duration: 3s;
                            }

                            @-webkit-keyframes fade {
                                from {opacity: .4}
                                to {opacity: 1}
                            }

                            @keyframes fade {
                                from {opacity: .4}
                                to {opacity: 1}
                            }

                            /* On smaller screens, decrease text size */
                            @media only screen and (max-width: 300px) {
                                .text {font-size: 11px}
                            }
                        </style>
                        <div style="display: flex; margin-top: 30px">
                            <div class="slideshow-container" style="display: inline">

                                <div class="mySlides fade">
                                    <img src="https://ogau-irk.ru/upload/iblock/8cd/8cdf78f6de32b0e544b3753fb57b95e3.jpg" style="width:600px" alt="">
                                </div>

                                <div class="mySlides fade">
                                    <img src="https://sportyfi.ru/files/image/fitnes/kak-pohudet-v-trenagernom-zale/33.jpg" style="width:600px">
                                </div>

                                <div class="mySlides fade">
                                    <img src="/kura/img/detsk.jpg" style="width:600px">
                                </div>

                            </div>

                            <div style="text-align:center ">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>

                            <script>
                                var slideIndex = 0;
                                showSlides();

                                function showSlides() {
                                    var i;
                                    var slides = document.getElementsByClassName("mySlides");
                                    var dots = document.getElementsByClassName("dot");
                                    for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                    }
                                    slideIndex++;
                                    if (slideIndex > slides.length) {slideIndex = 1}
                                    for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                    }
                                    slides[slideIndex-1].style.display = "block";
                                    dots[slideIndex-1].className += " active";
                                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                                }
                            </script>
                        </div>
                    </div>


            </section>
            <section class="portfolio">
                <div class="text1"><b><span style="">~ ВЫБИРАЙТЕ ТО, ЧТО ПО ДУШЕ или... ВСЁ СРАЗУ ~</span></b></div>

                <div style="display: flex; ">
                    <div class="cartt">
                        <img src="https://ogau-irk.ru/upload/iblock/8cd/8cdf78f6de32b0e544b3753fb57b95e3.jpg" style="width: 370px; height: 270px; margin: 15px">
                        <button>Посмотреть...</button>
                    </div>
                <div class="cartt">
                    <img src="https://ogau-irk.ru/upload/iblock/8cd/8cdf78f6de32b0e544b3753fb57b95e3.jpg" style="width: 370px; height: 270px; margin: 15px">
                    <button>Посмотреть...</button>
                </div>
                <div class="cartt">
                    <img src="https://ogau-irk.ru/upload/iblock/8cd/8cdf78f6de32b0e544b3753fb57b95e3.jpg" style="width: 370px; height: 270px; margin: 15px">
                    <button>Посмотреть...</button>
                </div>
                </div>

    </div>

    <script src="js/1.js"></script>
    <script  src="js/jquery-3.6.1.min.js"></script>
</body>
</html>