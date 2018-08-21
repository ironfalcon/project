@extends('layouts.app_with_image')

@section('content')
    <!--Header-->
    <div id="second-deader">
    <div class="container">
      <div class="row">
        <div class="header-text">
        <div class="col-md-12">
          <div class="text-center page-title">
          Металлоконструкции зданий
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
          <span style="color:rgb(50, 167, 237);">/</span> Металлоконструкции зданий
        </div>
      </div>
    </div>
  </div>
  <!--Header END-->
  <!--Description section-->
  <div id="produtions-metal-construction">
    <div class="container">
    	<div class="row">
        <div class="col-md-12 text-left"><span class="text-title">Объединенная группа компаний «Технолог»</span>  поставляет 
металлоконструкции различного назначения, применяемые в строительной, 
нефтехимической, металлургической, машиностроительной, угольной отраслях 
промышленности и коммунальном хозяйстве. Производство осуществляется на 
саратовском заводе резервуарных металлоконструкций. Линейка продукции постоянно 
расширяется и не ограничивается резервуарными металлоконструкциями.
          </div>
      </div>
    </div>
  </div>
  <!--produtions END-->
  <!--metal-construction production-->
  <div id="produtions-MC-list">
    <div class="container">
        <ul class="row">
        @foreach($allMetalConstruction as $production)
          <li class="col-md-4 col-xs-4">
            <a href="{{ route('metal-construction-buldings.show', $production->id) }}">{{$production->title}}</a>
          </li>
        @endforeach
        </ul>
    </div>
  </div>
  <!--metal-construction types END-->
    <!--Description section-->
  <div id="produtions-MC-blocks">
    <div class="container-fluid">
      <div class="row">
        @foreach($allMetalConstruction as $production)
        <div class = "col-md-3 block-el">
    <!--Проверять если нету превью имейдж то подставлять чертеж (из папки drawing)-->
          @if($production->preview_img)
            <img class="block-image" src=" {{asset('files/metal_construction/prev_img/'.$production->preview_img) }} ">
          @else
            <img class="block-image" src=" {{asset('files/metal_construction/drawing/'.$production->drawing) }} ">
          @endif

          <a  class="col-md-12 block-text" href="{{ route('metal-construction-buldings.show', $production->id) }}">
            {{$production->title}}
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!--produtions END-->
  <!--about-->
  <div id="about-second">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
<p>В объединение производственных предприятий «Технолог» входят следующие компании: НПООО «Технолог-Гидромаш». Основано в 1996 году. Области деятельности – осуществление комплексных поставок металлоконструкций резервуаров, навесного резервуарного оборудования, противопожарного оборудования и пенообразователя предприятиям нефтегазового и нефтехимического комплекса. Также предприятие осуществляет монтаж резервуаров «под ключ».</p>

<p>АО «АП «РМК». Основано в 1947 году. Области деятельности – изготовление резервуаров и прочих металлоконструкций, разработка проектов КМ и КМД, выполнение проектных работ любой сложности. ООО «ТД «РЗМК». Основано в 2015 году. Область деятельности – поставка металлоконструкций резервуаров для нужд предприятий системы «Транснефть».</p>
        </div>
      </div>
    </div>
  </div>
  <!--about END-->
 <!--partners-->
 <div id="partners">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"><div class="title-blue col-md-3"> <h3> Наши партнеры</h3> </div> </div>
    </div>
            <div class="row">    
              <div class="col-md-4">
                <div class="partners-image"> 
                <img width="200px" src="{{ asset('files/img/clients/10.jpg') }}">
                </div>  
              </div>   
              <div class="col-md-4">
                <div class="partners-image">  
                <img width="200px" src="{{ asset('files/img/clients/11.jpg') }}">
                </div>  
              </div>     
              <div class="col-md-4">
                <div class="partners-image">
                <img width="200px" src="{{ asset('files/img/clients/12.jpg') }}">
                </div>  
              </div>
            </div>
  </div>
</div>
  <!--partners END-->

  <!--partners-->
<div id="docs">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"><div class="title-blue col-md-5"> <h3> Нормативные документы</h3> </div> </div>
    </div>
  </div>
</div>
  <div id="docsCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#docsCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#docsCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <div id="docs-item">
          <div class="container">
            <div class="row">    
              <div class="col-md-4">
                <div class="docs-image"> 
                <a  data-toggle="modal" data-target="#docs1" ><img width="200px" src="{{ asset('files/img/docs/1.jpg') }}"></a>
                </div>  
              </div>   
              <div class="col-md-4">
                <div class="docs-image">  
                <a  data-toggle="modal" data-target="#docs2" ><img width="200px" src="{{ asset('files/img/docs/2.jpg') }}"></a>
                </div>  
              </div>     
              <div class="col-md-4">
                <div class="docs-image">
                <a  data-toggle="modal" data-target="#docs3" ><img width="200px" src="{{ asset('files/img/docs/3.jpg') }}"></a>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div id="docs-item">
          <div class="container">
            <div class="row">   
              <div class="col-md-4">
                <div class="docs-image">  
                <a  data-toggle="modal" data-target="#docs4" ><img width="200px" src="{{ asset('files/img/docs/4.jpg') }}"></a>
                </div>  
              </div>             
              <div class="col-md-4">
                <div class="docs-image">
                <a  data-toggle="modal" data-target="#docs5" ><img width="200px" src="{{ asset('files/img/docs/5.jpg') }}"></a>
                </div>  
              </div>   
              <div class="col-md-4">
                <div class="docs-image">  
                <a  data-toggle="modal" data-target="#docs6" ><img width="200px" src="{{ asset('files/img/docs/6.jpg') }}"></a>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/1.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->  
      <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs2" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/2.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->        <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs3" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/3.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->        <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs4" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/4.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->        <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs5" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/5.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->     <!-- /Load Photo in Modal -->
            <div class="modal fade" id="docs6" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title text-center"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('files/img/docs/6.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->  
  <!--partners END-->

@endsection('content')
