@extends('layouts.app_with_image')
@section('content')
   <!--Header-->
   <div id="second-deader">
        <div class="container">
            <div class="row">
                <div class="header-text">
                    <div class="col-md-12">
                        <div class="text-center page-title">
                            Новости
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
                 Новости
                </div>
            </div>
        </div>
    </div>
    <!--Header END-->
    <!--Description section-->
    <div id="newses">
        <div class="container">
            <div class="row">
                <!--News pref-->
                @foreach($allNews as $news)
                <div class="news-pre">
                    <h2 class="col-md-12"> {{$news->title}}</h2>
                    <div class="col-md-12 news-description">
                        {{$news->description}}
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <span class="date-line">{{$news->created_at->format('d.m.Y')}}</span>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-box" style="float:right; margin-bottom: 15px;" href="{{ route('news.show', $news->id) }}">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--News pref END-->
                {{$allNews->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
    
    <!--produtions END-->
@endsection('content')
