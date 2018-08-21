@extends('layouts.app_admin_panel')

@section('content')

<div class="admin-container">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h3>Создание нового резервуарного оборудования</h3>
        </div>
        <div class="col-md-12">
            <form enctype="multipart/form-data" action="{{ route('admin.reservuars-equipment.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <br>
                    <label for="title">Заголовок:</label>
                    <input required type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">
                    <br>
                    <label for="text">Текст:</label>
                    <textarea required name="text" id="text"  rows="5" class="form-control input-text">{{old('text')}}</textarea>
                    <br>
                    <label for="parameters">Технические характеристики:</label>
                    <textarea name="parameters" id="parameters"  rows="5" class="form-control input-text">{{old('parameters')}}</textarea>
                    <br>
                    <label for="preview_img">Картинка превью:</label>
                    <input type="file" class="btn btn-warning" id="preview_img" name="preview_img" value="{{ old('preview_img')}}">
                    <br>
                    <label for="drawing">Чертеж:</label>
                    <input type="file" class="btn btn-warning" id="drawing" name="drawing" value="{{ old('drawing')}}">
                    <br>
                    <label for="drawing">PDF:</label>
                    <input type="file" class="btn btn-warning" id="pdf" name="pdf" value="{{ old('pdf')}}">
                    <br>
                    <button class="btn btn-success float-right">Добавить</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection('content')
