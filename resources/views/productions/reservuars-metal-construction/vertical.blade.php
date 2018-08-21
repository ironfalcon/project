@extends('layouts.app_with_image')


@section('content')
  <!--Header-->
  <div id="second-deader">
    <div class="container">
      <div class="row">
        <div class="header-text">
        <div class="col-md-12">
          <div class="text-center page-title">
          Резервуары вертикальные стальные цилиндрические
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
        <a href="{{ route('reservuars_metal_construction.index') }}" style="text-decoration: none; color: white;">Резервуарные металлоконструкции </a> 
        <span style="color:rgb(50, 167, 237);">/</span> Резервуары вертикальные стальные цилиндрические
        </div>
      </div>
    </div>
  </div>
  <!--Header END-->
  <!--Description section-->
  <div id="produtions" style="background-color: #fff;">
    <div class="container">
    	<div class="row">
        <div class="col-md-12 text-left"><span class="text-title">Объединенная группа компаний «Технолог»</span>  изготавливает 
металлоконструкции вертикальных цилиндрических сварных стальных резервуаров 
для нефти, нефтепродуктов, воды и других жидкостей выполненные 
по международным и национальным стандартам. ТУ 5265-020-01394649-2006
        </div>
        <div class="video-production col-md-12">
          <video pip="false" data-video-count="1" loop="loop" autoplay="autoplay" data-src="movie.mp4" data-text="TransitPlus" preload="metadata" muted="" class="bgvideo">
            <source src="{{ asset('/files/movie.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: #fff;padding: 20px;color:#000;">
    <div class="row">
      <div class="col-md-3">
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #363636"></div>Днище</div> 
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #696969"></div>Основная стенка</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #FFF; border: 1px solid #000;"></div>Алюминиевый понтон</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #0000FF"></div>Внутренняя лестница</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #9C9C9C"></div>Защитная стенка</div>    
      </div>
      <div class="col-md-3">
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #CD5C5C"></div>Молниеприемник</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #8B7E66"></div>Крыша</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #436EEE"></div>Внешняя лестница</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #63B8FF"></div>Ветровое кольцо</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #FFFF00"></div>Замерный люк</div>  
      </div>
      <div class="col-md-3">
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #FFFF00"></div>Дыхательный клапан</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #FFFF00"></div>Монтажный люк</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #FF0000"></div>Система подслойного пожаротушения</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #EE5C42"></div>Направляющая</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #3CB371"></div>Вакуумный датчик</div>    
      </div>
      <div class="col-md-3">
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #3CB371"></div>Люк перехода</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #3CB371"></div>Устройство противоповоротное</div>
        <div class="col-md-12 hint-desc"><div class="hint" style="background: #8FBC8F"></div>Люк-лаз</div>     
      </div>
    </div>
  </div>
  <!--produtions END-->
  <!--Desc reservuars section-->
    <!--Reserv 1-->
  <div style="background-color: rgb(50, 167, 237); color:#fff; font-size: 30pt; text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          Резервуары с понтоном
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #fff;text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <img width="100%" height="100%" src="{{ asset('/files/img/reservuars/rezerv3.png') }}">
      </div>
    </div>
  </div>
      <!--Reserv 2-->
  <div style="background-color: rgb(50, 167, 237); color:#fff; font-size: 30pt; text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          Резервуары без понтоном
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #fff;text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <img width="100%" height="100%" src="{{ asset('/files/img/reservuars/rezerv2.png') }}">
      </div>
    </div>
  </div>
      <!--Reserv 1-->
  <div style="background-color: rgb(50, 167, 237); color:#fff; font-size: 30pt; text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          Технические характеристики резервуаров
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #fff; color:#000;text-align: center; vertical-align: middle;">
    <div class="container tables-reservuars">
      <div class="row">
        <table class="table table-hover" style="margin-top: 20px;">
          <thead>
            <tr>
              <th scope="col">Объем резервуара, куб.м.</th>
              <th scope="col">Диаметр, мм</th>
              <th scope="col">Высота, мм</th>
              <th scope="col">Количество рулонов</th>
              <th scope="col">Ориентировочная масса* , т.</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>100 000</td><td>95400</td><td>18000</td><td>-</td><td>от 1275 до 2500</td></tr>
            <tr><td>50 000</td><td>60700</td><td>18000</td><td>-</td><td>от 995 до 1275</td></tr>
            <tr><td>20 000</td><td>39900</td><td>18000</td><td>7</td><td>от 420 до 770</td></tr>
            <tr><td>10 000</td><td>34200</td><td>12000</td><td>4</td><td>от 249 до 300</td></tr>
            <tr><td>10 000</td><td>28500</td><td>18000</td><td>4</td><td>от 249 до 300</td></tr>
            <tr><td>5 000</td><td>22800</td><td>12000</td><td>2</td><td>от 129 до 145</td></tr>
            <tr><td>5 000</td><td>20920</td><td>15000</td><td>2</td><td>от 115 до 155</td></tr>
            <tr><td>3 000</td><td>18980</td><td>12000</td><td>1</td><td>от 89 до 110</td></tr>
            <tr><td>3 000</td><td>16500</td><td>15000</td><td>1</td><td>от 81 до 100</td></tr>
            <tr><td>2 000</td><td>15180</td><td>12000</td><td>1</td><td>от 56 до 77</td></tr>
            <tr><td>1 000</td><td>10430</td><td>12000</td><td>1</td><td>от 33 до 44</td></tr>
            <tr><td>700</td><td>10430</td><td>9000</td><td>1</td><td>от 27 до 32</td></tr>
            <tr><td>400</td><td>8530</td><td>7500</td><td>1</td><td>от 18 до 23</td></tr>
            <tr><td>300</td><td>7580</td><td>7500</td><td>1</td><td>от 15 до 18</td></tr>
            <tr><td>200</td><td>6630</td><td>6000</td><td>1</td><td>от 12,5 до 14</td></tr>
            <tr style="border-bottom:1px solid #5fafff;"><td>100</td><td>4730</td><td>6000</td><td>1</td><td>от 9,2 до 10</td></tr>
          </tbody>
        </table>
        <p style="text-align:left;">* - масса зависит от типа исполнения резервуара</p>

        <p style="text-align:left;">Условия эксплуатации резервуаров и их конструктивные особенности задаются Заказчиком при оформлении технического задания или бланка заказа на резервуар.</p>
        <div style="border-bottom:1px solid #5fafff;">
         <h3 style="text-align: left;"> Металлоконструкции вертикальных стальных сварных резервуаров емкостью от 100 до 50 000 куб. м. с защитной стенкой (стакан в стакане)</h3>
        </div>
        <div style="padding-top:20px">
          <div class="row">
            <div class="col-md-6">
              <img width="100%" height="100%" src="{{ asset('/files/img/reservuars/rezerv5.gif') }}">
            </div>
            <div class="col-md-6">
              <ol style="text-align: left;">
                <li>Крыша</li>
                <li>Основная стенка</li>
                <li>Защитная стенка</li>
                <li>Конструкция защиты</li>
                <li>Круговая площадка с ограждением на крыше</li>
                <li>Внутренняя лестница</li>
                <li>Круговая площадка с ограждением по кольцу жесткости</li>
                <li>Наружная лестница</li>
                <li>Кольцо жесткости защитной стенки</li>
                <li>Люки и патрубки в крыше</li>
                <li>Люки и патрубки в стенке</li>
                <li>Центральная часть днища</li>
                <li>Окрайка днища</li>
                <li>ЗУМПФ</li>
                <li>Площадка и стремянка пеногенератора</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--partners-->
<div id="docs">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"><div class="title-blue col-md-5"> <h3> Норамтивные документы</h3> </div> </div>
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
                <a  data-toggle="modal" data-target="#docs1" ><img width="200px" src="{{ asset('/files/img/docs/1.jpg') }}"></a>
                </div>  
              </div>   
              <div class="col-md-4">
                <div class="docs-image">  
                <a  data-toggle="modal" data-target="#docs2" ><img width="200px" src="{{ asset('/files/img/docs/2.jpg') }}"></a>
                </div>  
              </div>     
              <div class="col-md-4">
                <div class="docs-image">
                <a  data-toggle="modal" data-target="#docs3" ><img width="200px" src="{{ asset('/files/img/docs/3.jpg') }}"></a>
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
                <a  data-toggle="modal" data-target="#docs4" ><img width="200px" src="{{ asset('/files/img/docs/4.jpg') }}"></a>
                </div>  
              </div>             
              <div class="col-md-4">
                <div class="docs-image">
                <a  data-toggle="modal" data-target="#docs5" ><img width="200px" src="{{ asset('/files/img/docs/5.jpg') }}"></a>
                </div>  
              </div>   
              <div class="col-md-4">
                <div class="docs-image">  
                <a  data-toggle="modal" data-target="#docs6" ><img width="200px" src="{{ asset('/files/img/docs/6.jpg') }}"></a>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/1.jpg') }}"/>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/2.jpg') }}"/>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/3.jpg') }}"/>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/4.jpg') }}"/>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/5.jpg') }}"/>
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
                 <img class="img-thumbnail" alt="Production6" src="{{ asset('/files/img/docs/6.jpg') }}"/>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->  
  <!--partners END-->

@endsection('content')
