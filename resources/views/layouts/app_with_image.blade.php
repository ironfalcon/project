<!DOCTYPE html>
<html>
<head>
    <title>Группа компаний Технолог </title>

    <!--Fav-->
    <link rel="icon" href="/files/img/fav.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Bootstrap-->
    <link href="/files/css/bootstrap.css" rel="stylesheet">
    <!--Main style-->
    <link href="/files/css/style.css" rel="stylesheet">
    <!--FA icons--><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/files/css/icons.css">
</head>
<body>
<!--Background image-->
<img class="background" src="/files/img/br2.jpg">
<!--/Background image-->
<div id="top"></div>
<!--Wrapper-->
<!--InfoBar-->

<!--InfoBar END-->
<!--NAV-->
<div id="navigation">
    <div id="infobar" >
        <div class="container-fluid">
            <i class="fas fa-map-marker-alt"></i>
            г. Саратов, ул. Советская, д 3/5, корп. 1, эт. 1
            <div style="float:right;">
                <i class="fa fa-phone" aria-hidden="true"></i> +7 (8452) 22-72-85
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.9)!important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#about">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#projects">Проекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#all-services">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#produtions">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="http://www.tehgm.ru/sp_tp_news.html">Новости</a>
                </li>
                <li class="nav-el-color nav-item">
                    <a class="nav-link page-scroll" href="#contacts">Контакты</a>
                </li>
            </ul>
            <div class="inmenu" >
                <div class="container-fluid">
                    <p><i class="fas fa-map-marker-alt"></i>
                        г. Саратов, ул. Советская, д 3/5, корп. 1, эт. 1</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +7 (8452) 22-72-85 </p>
                </div>
            </div>
        </div>
    </nav>
</div>
<!--/NAV-->
<div id="wrapper">
    <!--Header-->
    <div id="second-deader">
        <div class="container">
            <div class="row">
                <div class="header-text">
                    <div class="col-md-12">
                        <div class="text-center page-title">
                            Новости
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Главная <span style="color:rgb(50, 167, 237);">/</span> Новости
                </div>
            </div>
        </div>
    </div>
    <!--Header END-->
    @yield('content')


    <!--  Footer-->
    <div id="contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-6 text-center title-footer"><h4> Контакты </h4></div>
                    <div></div>
                    <div class="col-md-12">
                        <p><i class="fas fa-map-marker-alt"></i> г. Саратов, ул. Советская, д 3/5, корп. 1, эт. 1</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +7 (8452) 22-72-85</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +7 (8452) 22-72-93</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +7 (8452) 22-72-96</p>
                        <p> <i class="fas fa-envelope"></i> zakaz@tehgm.ru</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.2544778406564!2d46.03042354996487!3d51.52689217645754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4114c795a117adb5%3A0xf7dc1fb4e9daa523!2z0YPQuy4g0KHQvtCy0LXRgtGB0LrQsNGPLCAzLCDRjdGCLiAxLCDQodCw0YDQsNGC0L7Qsiwg0KHQsNGA0LDRgtC-0LLRgdC60LDRjyDQvtCx0LsuLCA0MTAwMjg!5e0!3m2!1sru!2sru!4v1530176582807" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Contacts-->
    <!--Contacts END-->
    <div id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-6 text-center title-footer"><h4> Обратная связь </h4></div>
                    <div class="col-md-12 footer-contact-us">
                        <input type="text"  placeholder="Ваше имя" class="cont-data" name="name" id="name">
                        <input type="text" placeholder="Электронная почта" class=" cont-data" name="email" id="email">
                        <input type="text"  placeholder="Телефон" class=" cont-data" name="subject" id="subject">
                        <textarea placeholder="Ваше сообщение..." class=" cont-data" name="message" id="message" rows="4"></textarea>
                        <button type="submit" class="btn btn-box" style="float:right; margin-bottom: 15px;" onclick='Message("Форма обратной связи временно не работает, вы можете обратится к нам по даннным из блока Контакты")'>Отправить</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="footer-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Продукция</h2>
                                    <ul>
                                        <li><a href="http://tehgm.ru/sp_tp_cat_id_31.html">Резервуарное оборудование</a></li>
                                        <li><a href="http://tehgm.ru/sp_tp_cat_id_56.html">Строительство резервуаров</a></li>
                                        <li><a href="http://tehgm.ru/sp_tp_cat_id_27.html">Подслойное пожаротушение</a></li>
                                        <li><a href="http://tehgm.ru/cs_item_306.html">Металоконструкции зданий</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h2>Направления</h2>
                                    <ul>
                                        <li><a href="http://www.rmk.ru">Собственное производство</a></li>
                                        <li><a href="http://www.tehgm.ru">Проектирование и монтаж</a></li>
                                        <li><a href="http://www.tehgm.ru">Комплексное проектное решение</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="col-md-4">
                                   <h2>Услуги</h2>
                                   <ul>
                                     <li>Комплексный инжениринг</li>
                                     <li>Монтаж под ключ</li>
                                   </ul>
                                 </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer end-->


    <script src="files/js/jquery-3.3.1.min.js"></script>
    <script src="files/js/jquery.spincrement.js"></script>
    <script src="files/js/bootstrap.js"></script>
    <script src="files/js/jquery.animateNumber.js"></script>
    <script src="files/js/jquery.form.js"></script>
    <script src="files/js/ajaxMail.js"></script>
    <script src="files/js/jquery.mixitup.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.page-scroll').click( function(){ // ловим клик по ссылке с классом go_to jquery.mixitup.min.js
                var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
                if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
                }
                return false; // выключаем стандартное действие
            });
        });
    </script>
    <script type="text/javascript">
        function Message(str)
        {
            alert(str);
        }
    </script>
    <script>
        function countNum(num, id)
        {
            var percent_number_step = $.animateNumber.numberStepFactories.append(' +')
            $(id).animateNumber(
                {
                    number: num,
                    'font-size': '30px',

                    easing: 'easeInQuad',

                    numberStep: percent_number_step
                },
                1500
            );
        }
        $(document).ready(function(){
            var show = true;
            var countbox = "#about";
            $(window).on("scroll load resize", function(){
                if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена
                var w_top = $(window).scrollTop();        // Количество пикселей на которое была прокручена страница
                var e_top = $(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа
                var w_height = $(window).height();        // Высота окна браузера
                var d_height = $(document).height();      // Высота всего документа
                var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
                if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
                    countNum(20,"#fun-level-1");
                    countNum(50,"#fun-level-2");
                    countNum(500,"#fun-level-3");
                    show = false;
                }
            });
        });
    </script>
    <!-- Mixitup : Grid -->
    <script>
        $(function(){
            $('#Grid').mixItUp({
                load: {
                    filter:'.Production'
                }
            });
        });
    </script>
    <!-- /Mixitup : Grid -->

</body>
</html>
