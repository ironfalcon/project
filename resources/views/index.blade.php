@extends('layouts.app')
@section('content')
    <!--Header END-->
    <!--produtions-->
    <div id="produtions">
        <div class="container-fluid">
            <div class="row">
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#changeAboutProduction" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><div class="col-md-3 title-blue"> <h3> Продукция </h3> </div> </div>
                <div class="col-md-12 text-center">
                {!! $mainpage->AboutProduction !!}
                </div>
                <div class="row">
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('reservuars-equipment.index') }}">
                            <span class="icons">
                                <span class="icon-rezervuar_ob"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </span>
                            <p>Резервуарное оборудование</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('reservuars_metal_construction.index') }}">
                            <span class="icons">
                                <span class="icon-Rezervuat_construc"><span class="path1"></span><span class="path2"></span></span>
                            </span>
                            <p>Резервуарные металлоконструкции</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('fire-fighting.index') }}">
                            <span class="icons">
                                <span class="icon-pojar"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                            </span>
                            <p>Подслойное пожаротушение</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('metal-construction-buldings.index') }}">
                            <span class="icons">
                                <span class="icon-construct"><span class="path1"></span><span class="path2"></span></span>
                            </span>
                            <p>Металлоконструкции зданий</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--produtions END-->
    <!--about-->
    <div id="about">
        <div class="container-fluid">
            <div class="row">
            @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#changeAboutCompany" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><div class="title-white col-md-3"> <h3> О компании </h3> </div> </div>
                <div class="col-md-6">
                    {{ $mainpage->AboutCompany }}
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 row">
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Собственное производство</p>
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Профессиональный инжинеринг</p>
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Гарантия качества</p>
                        </div>
                        <div class="col-md-6 col-xs-12 row">
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Сертифицированная продукция</p>
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Сопровождение документации</p>
                            <p class="advantages col-md-12"><i class="check far fa-2x fa-check-square"></i> Зарубежный опыт</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about END-->
    <!--services-->

    <div id="all-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 all-services-element">
                    <a href="http://www.rmk.ru">
          <span class="icons">
            <span class="icon-production"></span>
          </span>
                        <p>Собственное производство</p>
                    </a>
                </div>
                <div class="col-md-4 all-services-element">
                    <a href="http://www.tehgm.ru">
          <span class="icons">
            <span class="icon-project_montage"></span>
          </span>
                        <p>Проектирование и монтаж</p>
                    </a>
                </div>
                <div class="col-md-4 all-services-element">
                    <a href="http://www.tehgm.ru">
          <span class="icons">
           <span class="icon-compleks"></span>
          </span>
                        <p>Комплексное проектное решение</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="geo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 title-blue text-center">
                    <h3>География работы</h3>
                    </div>
                </div>
                <div class="col-md-12 text-center p-10">
                    <img width="100%" src="files/img/geo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--services END-->
    <!---Gallery-->


      <!-- Portfolio -->
    <div id="projects" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12"><div class="col-md-3 title-white">
                        <h3> Проекты </h3>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <h2>
                        <span class="filter label label-default btn btn-box-inverse" data-filter=".Production">Производство</span>
                        <span class="filter label label-default btn btn-box-inverse" data-filter=".Rezervuars">Резервуары</span>
                        <!--<<span class="filter label label-default btn btn-box-inverse" data-filter=".Montage">Монтаж</span>
                        span class="filter label label-default btn btn-box-inverse" data-filter="all">Все</span>-->
                    </h2>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="gallery">
                    <ul id="Grid" class="gcontainer row">
                        <!-- Rezervuars -->
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars1" class="mix-cover">
                                <img src="files/img/images/r1.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars2" class="mix-cover">
                                <img src="files/img/images/r2.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars3" class="mix-cover">
                                <img src="files/img/images/r3.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars4" class="mix-cover">
                                <img src="files/img/images/r4.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars5" class="mix-cover">
                                <img src="files/img/images/r5.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Rezervuars" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Rezervuars6" class="mix-cover">
                                <img src="files/img/images/r6.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Резервуары</span></span>
                            </a>
                        </li>
                        <!-- Production -->
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production1" class="mix-cover">
                                <img src="files/img/images/p1.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production2" class="mix-cover">
                                <img src="files/img/images/p2.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production3" class="mix-cover">
                                <img src="files/img/images/p3.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production4" class="mix-cover">
                                <img src="files/img/images/p4.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production5" class="mix-cover">
                                <img src="files/img/images/p5.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                        <li class="col-md-4 mix Production" data-cat="graphics">
                            <a data-toggle="modal" data-target="#Production6" class="mix-cover">
                                <img src="files/img/images/p6.jpg" alt="placeholder">
                                <span class="overlay"><span class="valign"></span><span class="title">Производство</span></span>
                            </a>
                        </li>
                    </ul>

                    <!-- Load Photo in Modal -->
                    <div class="modal fade" id="Rezervuars1" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars1" src="files/img/images/r1.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Rezervuars2" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars2" src="files/img/images/r2.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Rezervuars3" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars3" src="files/img/images/r3.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Rezervuars4" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars4" src="files/img/images/r4.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Rezervuars5" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars5" src="files/img/images/r5.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Rezervuars6" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars6" src="files/img/images/r6.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production1" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production1" src="files/img/images/p1.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production2" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production2" src="files/img/images/p2.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production3" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production3" src="files/img/images/p3.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production4" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production4" src="files/img/images/p4.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production5" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production5" src="files/img/images/p5.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div class="modal fade" id="Production6" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Производство</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Production6" src="files/img/images/p6.jpg"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- /Load Photo in Modal -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->

    <!---Gallery END-->
    <!--Clients-->
    <div id="clients">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center"><div class="title-blue col-md-3"> <h3> Наши заказчики</h3> </div> </div>
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#editClients" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @for($i=0, $j=0; $i<$allClients->count(); $i+=3, $j++)
            @if($i==0)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}" class="active"></li>
            @else
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}"></li>
            @endif
        @endfor
        </ol>
        <div class="carousel-inner text-center">
            @for($i = 0; $i <$allClients->count()  ; $i+=3)
            @if($i==0)
            <div class="carousel-item active">
            @else
            <div class="carousel-item">
            @endif
                <div id="clients-item">
                    <div class="container">
                        <div class="row">
                            @for($j = $i; $j < $i+3 ; $j++)
                                @if($j>=$allClients->count())
                                    @break
                                @endif
                                <div class="col-md-4">
                                    <div class="clients-image">
                                        <img width="200px" src="{{ asset('files/img/clients/'.$allClients[$j]->img) }}">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <!--Clients END-->
@auth
    {{--Изменение описания о Компании--}}
    <div class="modal fade" id="changeAboutCompany" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О компании</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => ['home.update'], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        <label for="AboutCompany">О компании:</label>
                        <textarea name="AboutCompany" id="AboutCompany" rows="5" class="summernote form-control">{{  $mainpage->AboutCompany }}</textarea>
                        <br>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    
    {{--Изменение описания о продукции--}}
    <div class="modal fade" id="changeAboutProduction" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О продукции</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                    {!! Form::open(['route' => ['home.update'], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        <label>О продукции:</label>
                        <textarea name="AboutProduction" id="AboutProduction" rows="5" class="summernote">
                        {{  $mainpage->AboutProduction }}
                        </textarea>
                        <br>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
        
    {{--Изменение заказчиков--}}
    <div class="modal fade" id="editClients" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Наши заказчики</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                    <div class="form-group">
                        <div class="row pb-3">
                        <div class="col-md-12 text-right">
                            <a href="#" data-toggle="modal" data-target="#addClients" class="btn btn-warning">Добавить</a>
                        </div>
                    </div>
                        <div class="container">
                            <div class="row">
                            @foreach($allClients as $Client)
                                <div class="col-md-4 col-xs-12 text-center" style="padding:2px;">
                                    <div style="border: solid 1px rgb(50, 167, 237);">
                                    <img src="{{asset('files/img/clients/'.$Client->img)}}" height="200px" >
                                    </div>
                            <div class="col-md-12 admin-icons-prod text-right">
                                <!-- форма удаления -->
                                {!! Form::open(['method' => 'DELETE', 'route' => ['clients.delete', $Client->id] ])!!}
                                {{ csrf_field() }}
                                <button alt="Удалить" style="margin-top:5px;" class="btn btn-danger" onclick="return confirm('Вы уверены?')">
                                <i class="fas fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="addClients" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Наши заказчики</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                <form enctype="multipart/form-data" action="{{ route('clients.add') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Наши заказчики:</label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="img" name="img" type="file" class="btn btn-warning">
                                    </div>           
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endauth

@endsection('content')
