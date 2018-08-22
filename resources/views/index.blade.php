@extends('layouts.app')

@section('content')
    <!--Header END-->
    <!--produtions-->
    <div id="produtions">
        <div class="container">
            <div class="row">
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#changeAboutProduction" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
                <div class="col-md-12"><div class="col-md-3 title-blue"> <h3> Продукция </h3> </div> </div>
                <div class="col-md-12 text-center">
                Вся продукция, производимая и поставляемая нашим объединением, сертифицирована на соответствие требованиям действующих национальных стандартов и технических условий, и имеет полный пакет разрешительных документов.
                {{ $mainpage->AboutProduction }}
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
        <div class="container">
            <div class="row">
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="#" data-toggle="modal" data-target="#changeAboutCompany" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
                <div class="col-md-12 text-center"><div class="title-white col-md-3"> <h3> О компании </h3> </div> </div>
                <div class="col-md-6">
                    Группа компаний "Технолог" оказывает полный спектр услуг по оснащению и строительству нефтяных, газовых и химических предприятий. Наша репутация лидера рынка основана на многолетнем опыте, собственном производстве и активном внедрении современных технологий в работе.
                    {{ $mainpage->AboutCompany }}
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Собственное производство</p>
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Профессиональный инжинеринг</p>
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Гарантия качества</p>
                        </div>
                        <div class="col-md-6">
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Сертифицированная продукция</p>
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Сопровождение документации</p>
                            <p class="advantages"><i class="check far fa-3x fa-check-square"></i> Зарубежный опыт</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-12 text-center numbers">
                  <div class="row">
                    <div class="col-md-4">
                      <span id="fun-level-1"> 0 </span>
                      <p> Подпись</p>
                    </div>
                    <div class="col-md-4">
                      <span id="fun-level-2"> 0 </span>
                      <p> Подпись</p>
                    </div>
                    <div class="col-md-4">
                      <span id="fun-level-3">  0 </span>
                      <p> Подпись</p>
                    </div>
                  </div>
                </div>-->
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
    <!--services END-->
    <!---Gallery-->


      <!-- Portfolio -->
    <div id="projects" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 title-white">
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

    <!---Gallery END->
    <!--Clients response

    <div id="clients-comment">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center"><div class="title-white col-md-3"> <h3> Отзывы </h3> </div> </div>
      </div>
    </div>
  </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div id="clients-comment-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-2 comment-icon">
                        <span class="icon-comment"></span>
                      </div>
                      <div class="col-md-3 image-slider">
                        <img src="img/otzv/1.png">
                      </div>
                      <div class="col-md-7  text-left">
                        <div class="comment-text">
                      Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной
                        </div>
                        <button type="submit" class="btn btn-box-white" style="float:right; margin-bottom: 15px;">Открыть</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div id="clients-comment-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-2 comment-icon">
                        <span class="icon-comment"></span>
                      </div>
                      <div class="col-md-3 col-xs-12 image-slider">
                        <img src="img/otzv/1.png">
                      </div>
                      <div class="col-md-7 text-left">
                                          <div class="comment-text">
                      Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной
                        </div>
                      <button type="submit" class="btn btn-box-white" style="float:right; margin-bottom: 15px;">Открыть</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div id="clients-comment-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-2 comment-icon">
                        <span class="icon-comment"></span>
                      </div>
                      <div class="col-md-3 image-slider">
                        <img src="img/otzv/1.png">
                      </div>
                      <div class="col-md-7  text-left">
                        <div class="comment-text">
                      Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной Продукция нашей компании является сертифицированной
                        </div>
                      <button type="submit" class="btn btn-box-inverse" style="float:right; margin-bottom: 15px;">Открыть</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    Clients comment END-->
    <!--Clients-->
    <div id="clients">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center"><div class="title-blue col-md-3"> <h3> Наши заказчики</h3> </div> </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <div id="clients-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/2.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/3.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="clients-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/4.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/5.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/6.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="clients-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/7.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/8.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="clients-image">
                                    <img width="200px" src="files/img/clients/9.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                       <br>
                        <textarea name="AboutCompany" id="AboutCompany" rows="5" class="summernote form-control">{{  $mainpage->AboutCompany }}</textarea>
                        <br>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    
    {{--Изменение описания о Компании--}}
    <div class="modal fade" id="changeAboutProduction" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О продукции</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => ['home.update'], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        <label for="AboutProduction">О продукции:</label>
                        <br>
                        <textarea name="AboutProduction" id="AboutProduction" rows="5" class="summernote form-control">
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
@endauth

@endsection('content')
