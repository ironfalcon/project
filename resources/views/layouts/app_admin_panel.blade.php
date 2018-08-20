<!DOCTYPE html>
<html>
<head>
    <title>Группа компаний Технолог</title>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/files/css/icons.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
       <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(44, 66, 74)!important; margin-top:0px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="admin-bar">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                    <span class="caret"></span></a>
                <div class="dropdown-menu">
                    <a  class="dropdown-item" href="#">Профиль</a>
                    <a  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Выйти
                    </a>
                     <form class="dropdown-item" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
        </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('admin.main') }}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#all-services">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('admin.production') }}">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('news.admin') }}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}">На сайт</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')



<script src="{{ asset('files/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://unpkg.com/popper.js"></script>
<script src="{{ asset('files/js/bootstrap.js') }}"></script>
<!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

<!-- Initialize Quill editor -->
<script type="text/javascript">
        $(document).ready(function () {
            $("#text").editor({
                uiLibrary: 'bootstrap4'
            });
        });
    </script>


</body>
</html>
