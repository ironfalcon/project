@extends('layouts.app_admin_panel')

@section('content')
    <div class="container">
        <a href="{{ route('news.create') }}"><button class="btn btn-success">Создать</button></a>

            @foreach($allNews as $news)
            <div class="row">
                <div class="col-md-9">
                    <h2 class="col-md-12"> {{$news->title}}</h2>
                    <div class="col-md-12 news-description">
                        {{$news->description}}
                    </div>
                    <div class="col-md-12">
                        <span class="date-line">{{$news->created_at}}</span>
                    </div>
                </div>
                <div class="col-md-1" style="margin-left: 10px; margin-top: 23px;">
                    <a href="{{ route('news.edit', $news->id) }}"><button class="btn btn-warning" >Изменить </button></a>
                </div>
                <div class="col-md-1" style="margin-left: 10px; margin-top: 23px; float: left;">
                {!! Form::open(['method' => 'DELETE', 'route' => ['news.delete', $news->id] ])!!}
                    <button class="btn btn-danger cd" onclick="return confirm('Вы уверены?')" style="float:right;">Удалить</button>
                {!! Form::close() !!}
                </div>
            </div>
            @endforeach

    </div>

@endsection('content')
