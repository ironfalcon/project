@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">
        <a href="{{ route('news.create') }}"><button class="btn btn-success">Создать</button></a>
            @foreach($allNews as $news)
            <div class="container">
            <div class="row" style="margin-top:20px;">
                    <div class="col-md-12 text-right" style="border-top:1px solid #000; padding: 10px;">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['news.delete', $news->id] ])!!}
                        <button style="margin-left:10px;" class="btn btn-danger float-right" onclick="return confirm('Вы уверены?')">Удалить</button>
                        {!! Form::close() !!}
                        <a href="{{ route('news.edit', $news->id) }}"><button class="btn btn-warning  float-right" >Изменить </button></a>
                    </div>
                        <h2 class="col-md-12"> {{$news->title}}</h2>
                        <div class="col-md-12 news-description">
                            {{$news->description}}
                        </div>
                        <div class="col-md-12">
                            <span class="date-line">{{$news->created_at}}</span>
                        </div>
            </div>
            </div>
            @endforeach

    </div>
</div>

@endsection('content')
