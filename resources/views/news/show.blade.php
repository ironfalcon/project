@extends('layouts.app_with_image')

@section('content')

    <div id="newses">
        <div class="container">
            <div class="row">
                <!--News pref-->
                <div class="news-pre">
                    <h1 class="col-md-12">{{$news->title}}</h1>
                    <div class="col-md-12 news-description">
                        <a href="#"><img src="{{$news->img}}" width="300px" class="news-img rounded float-left"></a>
                        {{$news->text}}
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
