@extends('layouts.app_with_image')
@section('content')

  <!--Header-->
  <div id="second-deader">
    <div class="container">
      <div class="row">
        <div class="header-text">
        <div class="col-md-12">
          <div class="text-center page-title">
          Резервуарные металлоконструкции
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
        <a href="{{ route('home') }}" style="text-decoration: none; color: white;">Главная</a> <span style="color:rgb(50, 167, 237);">/</span>
        <a href="{{ route('home') }}#produtions" style="text-decoration: none; color: white;">Продукция</a> 
        <span style="color:rgb(50, 167, 237);">/</span> Резервуарные металлоконструкции
        </div>
      </div>
    </div>
  </div>
  <!--Header END-->
  <!--Description section-->
  <div id="produtions">
    <div class="container">
    	<div class="row">
            @auth
            <div class="col-md-12 control-element text-right">
                <a href="#" data-toggle="modal" data-target="#changeConcreteText" class="btn btn-warning">
                <i class="fas fa-pen-square"></i>
                </a>
            </div>
            @endauth
            <div class="col-md-12 text-left">
            {!!$ConcreteText->text!!}
            </div>
        <div class="col-xs-6 productions-element"> 
        <a href="{{ route('reservuar.vertical') }}">
              <span class="icons">
                <span class="icon-rezervuar_ob"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>              
              </span>
              <p>Резервуары вертикальные стальные цилиндрические</p>
        </a>
        </div>
        <div class="col-xs-6 productions-element"> 
        <a href="{{ route('reservuar.horizontal') }}">
              <span class="icons">
                  <span class="icon-Rezervuat_construc"><span class="path1"></span><span class="path2"></span></span>
              </span>
              <p>Резервуары горизонтальные стальные цилиндрические</p>
        </a>
        </div>
      </div>
    </div>
  </div>
  <!--produtions END-->
  <!--about-->
  <div id="about-second" style=>
    <div class="container">
      <div class="row">
        @auth
        <div class="col-md-12 control-element text-right">
            <a href="#" data-toggle="modal" data-target="#changeMainText" class="btn btn-warning">
            <i class="fas fa-pen-square"></i>
            </a>
        </div>
        @endauth
        <div class="col-md-12"> 
        {!!$MainText->text!!}
        </div>
      </div>
    </div>
  </div>
  <!--about END-->
  
 <!--partners-->
 <div id="partners">
        <div class="container-fluid">
            <div class="row">
        <div class="col-md-12 text-center"><div class="title-blue col-md-3"> <h3> Наши партнеры</h3> </div> </div>
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="{{route('admin.partners.index')}}" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @for($i=0, $j=0; $i<$allPartners->count(); $i+=3, $j++)
            @if($i==0)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}" class="active"></li>
            @else
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}"></li>
            @endif
        @endfor
        </ol>
        <div class="carousel-inner text-center">
            @for($i = 0; $i <$allPartners->count()  ; $i+=3)
            @if($i==0)
            <div class="carousel-item active">
            @else
            <div class="carousel-item">
            @endif
                <div id="clients-item">
                    <div class="container">
                        <div class="row">
                            @for($j = $i; $j < $i+3 ; $j++)
                                @if($j>=$allPartners->count())
                                    @break
                                @endif
                                <div class="col-md-4">
                                  <div class="partners-image"> 
                                        <img width="200px" src="{{ asset('files/img/partners/'.$allPartners[$j]->img) }}">
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
  <!--partners END-->
  <!--Docs-->
 <div id="docs">
        <div class="container">
            <div class="row">
        <div class="col-md-12 text-center"><div class="title-blue col-md-3"> <h3> Наши партнеры</h3> </div> </div>
                @auth
                <div class="col-md-12 control-element text-right">
                    <a href="{{route('admin.docs.index')}}" class="btn btn-warning">
                    <i class="fas fa-pen-square"></i>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div id="docsCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        @for($i=0, $j=0; $i<$allDocs->count(); $i+=3, $j++)
            @if($i==0)
            <li data-target="#docsCarousel" data-slide-to="{{$j}}" class="active"></li>
            @else
            <li data-target="#docsCarousel" data-slide-to="{{$j}}"></li>
            @endif
        @endfor
        </ol>
        <div class="carousel-inner text-center">
            @for($i = 0; $i <$allDocs->count()  ; $i+=3)
            @if($i==0)
            <div class="carousel-item active">
            @else
            <div class="carousel-item">
            @endif
                <div id="docs-item">
                    <div class="container">
                        <div class="row">
                            @for($j = $i; $j < $i+3 ; $j++)
                                @if($j>=$allDocs->count())
                                    @break
                                @endif
                                <div class="col-md-4">
                                  <div class="docs-image"> 
                                    <a href=""  data-toggle="modal" data-target="{{'#docs'.$allDocs[$j]->id}}" >
                                      <img width="200px" src="{{ asset('files/img/docs/'.$allDocs[$j]->img) }}">
                                    </a>
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
  <!--Docs END-->
  <!--Docs Modal-->
@foreach($allDocs as $Docs)
      <!-- /Load Photo in Modal -->
            <div class="modal fade" id="{{'docs'.$Docs->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/'.$Docs->img) }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->  
@endforeach
  <!--Docs Modal END-->
  
  @auth
    {{--Изменение описания о продукции--}}
    <div class="modal fade" id="changeConcreteText" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О продукции</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                  <form enctype="multipart/form-data" action="{{ route('text.update',$ConcreteText->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>О продукции:</label>
                        <textarea name="text" id="ConcreteText" rows="5" class="summernote form-control">
                        {{  $ConcreteText->text }}
                        </textarea>
                        <br>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                  </form>
                </div>

            </div>
        </div>
    </div>

    {{--Изменение текста о компании в продукции--}}
    <div class="modal fade" id="changeMainText" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">О продукции</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-left">
                  <form enctype="multipart/form-data" action="{{ route('text.update',$MainText->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>О продукции:</label>
                        <textarea name="text" id="MainText" rows="5" class="summernote form-control">
                        {{  $MainText->text }}
                        </textarea>
                        <br>
                        <button class="btn btn-success">Изменить</button>
                    </div>
                  </form>
                </div>

            </div>
        </div>
    </div>
@endauth
@endsection('content')
