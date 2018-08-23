@extends('layouts.app_with_image')
@section('content')
   <!--Header-->
   <div id="second-deader">
        <div class="container">
            <div class="row">
                <div class="header-text">
                    <div class="col-md-12">
                        <div class="text-center page-title">
                        {{$news->title}}
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
                <a href="{{ route('home')}}" style="text-decoration: none; color: white;">Главная</a> <span style="color:rgb(50, 167, 237);">/</span>
                <a href="{{ route('news')}}" style="text-decoration: none; color: white;"> Новости </a>
                 <span style="color:rgb(50, 167, 237);">/</span> {{$news->title}}
                </div>
            </div>
        </div>
    </div>
    <!--Header END-->
    <div id="newses">
        <div class="container">
            <div class="row">
                <!--News pref-->
                <div class="news-pre">
                    <h1 class="col-md-12">{{$news->title}}</h1>
                    <div class="col-md-12 news-description">
                        <a href="#"><img src="{{ asset('files/news_image/'.$news->img) }}" width="300px" class="news-img rounded float-left"></a>
                        {!!$news->text!!}
                        </div>
                    <div class="col-md-12">
                        <span class="date-line">{{$news->created_at}}</span>
                    </div>
                </div>
                <!--News pref END-->
            </div>
        </div>
    </div>

@endsection('content')
{{--<img src="/uploads/news_photo/{{ $new->photo }}">--}}
{{--{{ asset('files/img/fav.ico') }}--}}