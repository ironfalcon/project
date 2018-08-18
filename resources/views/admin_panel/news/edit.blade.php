@extends('layouts.app_admin_panel')

@section('content')
    <div class="container">
        <div class="row col-xs-10 col-xs-offset-1">
            <h3>Редактирование новости</h3>
        </div>
        <div class="row col-xs-10 col-xs-offset-1">

            <form enctype="multipart/form-data" action="{{ route('news.update', $news->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <br>
                    <label for="title">Заголовок:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                    <br>
                    <label for="description">Краткое описание:</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $news->description }}">
                    <br>
                    <label for="text">Текст новости:</label>
                    <textarea name="text" id="text"  rows="5" class="form-control">{{ $news->text }}</textarea>
                    <br>
                    <label for="img">Картинка:</label>
                    <input type="file" class="btn btn-success" id="img" name="photo">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
{{--{{ route('news.update') }}--}}