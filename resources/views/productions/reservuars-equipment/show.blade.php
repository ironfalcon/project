@extends('layouts.app_with_image')

@section('content')

  <!--Header-->
  <div id="second-deader">
    <div class="container">
      <div class="row">
        <div class="header-text">
        <div class="col-md-12">
          <div class="text-center page-title">
           <!--Заголовок на шапке-->        
  <!--наименование продукции-->
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
        Главная <span style="color:rgb(50, 167, 237);">/</span> Продукция <span style="color:rgb(50, 167, 237);">/</span> 
        <!--тип продукции-->
        <span style="color:rgb(50, 167, 237);">/</span>  <!--наименование продукции-->


        </div>
      </div>
    </div>
  </div>
  <!--Header END-->
  <!--БЛОК С ОПИСАНИЕМ ПРОДУКЦИИ-->
  <div id="produtions" style="background-color: #fff;">
    <div class="container">
    	<div class="row">
        <div class="col-md-12 text-left">
            <!--ОПИСАНИЕ-->
        </div>
      </div>
    </div>
  </div>
    <!--БЛОК С ЧЕРТЕЖАМИ-->
  <div style="background-color: rgb(50, 167, 237); color:#fff; font-size: 30pt; text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
           Чертеж
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #fff;text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <!-- Чертеж изображение -->
        <img width="100%" height="100%" src="">
      </div>
    </div>
  </div>

      <!--БЛОК ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ-->
  <div style="background-color: rgb(50, 167, 237); color:#fff; font-size: 30pt; text-align: center; vertical-align: middle;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          Технические характеристики
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #fff; color:#000;text-align: center; vertical-align: middle;">
    <div class="container tables-reservuars">
      <div class="row">
          <!--Таблица по техническим характеристикам-->
      </div>
    </div>
  </div>

@endsection('content')
{{--<img src="/uploads/news_photo/{{ $new->photo }}">--}}
{{--{{ asset('files/img/fav.ico') }}--}}