@extends('layouts.app_with_image')

@section('content')

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
                        <span class="date-line">{{$news->created_at}}</span>
                        <a class="btn btn-box" style="float:right; margin-bottom: 15px;" href="{{ route('news.show', $news->id) }}">Читать далее</a>
                    </div>
                </div>
                @endforeach
                <!--News pref END-->

            </div>
        </div>
    </div>
    <!--produtions END-->
@endsection('content')
