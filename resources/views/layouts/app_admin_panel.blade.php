<!DOCTYPE html>
<html>
<head>
    <title>Группа компаний Технолог</title>

    <!--Fav-->
    <link rel="icon" href="{{ asset('files/img/fav.ico') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Creatrix">
    <!--Bootstrap-->
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--FA icons--><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('files/css/icons.css') }}">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Новости</a></li>
            <li><a href="#">Продукция</a></li>
            <li><a href="#">Тест</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Профиль</a></li>

                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

    @yield('content')




<script src="{{ asset('files/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('files/js/jquery.spincrement.js') }}"></script>
<script src="{{ asset('files/js/bootstrap.js') }}"></script>
<script src="{{ asset('files/js/jquery.animateNumber.js') }}"></script>
<script src="{{ asset('files/js/jquery.form.js') }}"></script>
<script src="{{ asset('files/js/ajaxMail.js') }}"></script>
<script src="{{ asset('files/js/jquery.mixitup.js') }}"></script>
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
