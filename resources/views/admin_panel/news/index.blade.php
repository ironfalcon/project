@extends('layouts.app_admin_panel')

@section('content')
    <div class="container">
        <button class="btn btn-danger" href="{{ route('news.create') }}">Создать</button>
        <div class="row">
            @foreach($allNews as $news)
                <div class="col-md-8">
                    <h2 class="col-md-12"> {{$news->title}}</h2>
                    <div class="col-md-12 news-description">
                        {{$news->description}}
                    </div>
                    <div class="col-md-12">
                        <span class="date-line">{{$news->created_at}}</span>
                    </div>
                </div>
                <div class="col-md-2" style="border-left:solid 1px #000;">
                    <button class="btn btn-danger" >Изменить </button>
                </div>
                <div class="col-md-2" style="border-left:solid 1px #000;">
                    <button class="btn btn-warning" >Удалить </button>
                </div>
            @endforeach
        </div>
    </div>

@endsection('content')
