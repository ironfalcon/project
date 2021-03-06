<!DOCTYPE html>
<html>
<head>
    <title>Группа компаний Технолог </title>

    <!--Fav-->
    <link rel="icon" href="{{ asset('files/img/fav.ico') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Bootstrap-->
    <link href="{{ asset('/files/css/bootstrap.css') }}" rel="stylesheet">
    <!--Main style-->
    <link href="{{ asset('/files/css/style.css') }}" rel="stylesheet">
    <!--FA icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/files/css/icons.css') }}">
    <!--Summernote-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
</head>
<body>
<!--Background image-->
<img class="background" src="{{ asset('/files/img/br2.jpg') }}">
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
                @auth
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('admin.main') }}">Управление</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}#about">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}#projects">Проекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}#produtions">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('news') }}">Новости</a>
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
    @yield('content')



    <!--  Footer-->
    <div id="contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-6 text-center title-footer"><h4> Контакты </h4></div>
                    <div></div>
            @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#changeContactInfo" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
                    <div class="col-md-12">
                        <p><i class="fas fa-map-marker-alt"></i> {{  $mainpage->MainAdress }}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> {{  $mainpage->MainPhone }}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> {{  $mainpage->SecondPhone }}</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> {{  $mainpage->PhoneThree }}</p>
                        <p> <i class="fas fa-envelope"></i> {{  $mainpage->Email }}</p>
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
                        <form enctype="multipart/form-data" action="{{ route('mail.send') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text"  placeholder="Ваше имя" class="cont-data" name="name" id="name">
                            <input type="text" placeholder="Электронная почта" class=" cont-data" name="email" id="email">
                            <input type="text"  placeholder="Телефон" class=" cont-data" name="subject" id="subject">
                            <textarea placeholder="Ваше сообщение..." class=" cont-data" name="message" id="message" rows="4"></textarea>
                            <button type="submit" class="btn btn-box" style="float:right; margin-bottom: 15px;" onclick='Message("Спасибо за обращение")'>Отправить</button>
                        </form>
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

@auth
    {{--Изменение описания о Компании--}}
    <div class="modal fade" id="changeContactInfo" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О компании</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                    {!! Form::open(['route' => ['home.update'], 'method' => 'PUT']) !!}
                    <div class="form-group">
                    <p>
                       <label for="MainPhone">Основной номер телефона:</label>                        
                       <input name="MainPhone" id="MainPhone" class="form-control" value="{{  $mainpage->MainPhone }}">
                    </p>
                    <p>
                       <label for="SecondPhone">Второй номер телефона:</label>                        
                       <input name="SecondPhone" id="SecondPhone" class="form-control" value="{{  $mainpage->SecondPhone }}">
                    </p>
                    <p>
                       <label for="PhoneThree">Третий номер телефона:</label>                        
                       <input name="PhoneThree" id="PhoneThree" class="form-control" value="{{  $mainpage->PhoneThree }}">
                    </p>
                    <p>
                       <label for="MainAdress">Адрес:</label>                        
                       <input name="MainAdress" id="MainAdress" class="form-control" value="{{  $mainpage->MainAdress }}">
                    </p>
                    <p>
                       <label for="Email">Электронная почта:</label>                        
                       <input name="Email" id="Email" class="form-control" value="{{  $mainpage->Email }}">
                    </p>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endauth
<!-- footer end-->


    <script src="{{ asset('files/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://unpkg.com/popper.js"></script>
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
<!-- Include the summernote library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script>
      $('.summernote').summernote({
        tabsize: 6,
        height: 300
      });
    </script>

</body>
</html>
