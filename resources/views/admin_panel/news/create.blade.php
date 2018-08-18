@extends('layouts.app_admin_panel')

@section('content')
    <div class="container">
        <div class="row col-xs-10 col-xs-offset-1">
            <h3>Создание новости</h3>
        </div>
        <div class="row col-xs-10 col-xs-offset-1">

            <form enctype="multipart/form-data" action="{{ route('news.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <br>
                    <label for="title">Заголовок:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">
                    <br>
                    <label for="description">Краткое описание:</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ old('description')}}">
                    <br>
                    <label for="text">Текст новости:</label>
                    <textarea name="text" id="text"  rows="5" class="form-control">{{old('text')}}</textarea>
                    <br>
                    <label for="photo">Картинка:</label>
                    <input type="file" class="btn btn-success" id="photo" name="photo" value="{{ old('photo')}}">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
