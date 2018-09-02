@extends('layouts.app_admin_panel')

@section('content')

<div class="admin-container">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h3>Создание новости</h3>
        </div>
        <div class="col-md-12">

            <form enctype="multipart/form-data" action="{{ route('news.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <br>
                    <label for="title">Заголовок:</label>
                    <input required type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">
                    <br>
                    <label for="description">Краткое описание:</label>
                    <input required type="text" class="form-control" name="description" id="description" value="{{ old('description')}}">
                    <br>
                    <label for="text">Текст новости:</label>
                    <textarea required name="text" id="text"  rows="5" class="summernote form-control input-text">{{old('text')}}</textarea>
                    <br>
                    <label for="text">Дата:</label>
                    <input required name="date" id="date" class="form-control input-text" value="{{date('Y-m-d H:i:s')}}">
                    <br>
                    <label for="img">Картинка:</label>
                    <input type="file" class="btn btn-warning" id="img" name="photo" value="{{ old('photo')}}">
                    <br>
                    <button class="btn btn-success float-right">Добавить</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection('content')
