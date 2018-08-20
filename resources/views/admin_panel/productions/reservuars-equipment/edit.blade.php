@extends('layouts.app_admin_panel')

@section('content')

<div class="admin-container">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h3>Создание нового резервуарного оборудования</h3>
        </div>
        <div class="col-md-12">
            <form enctype="multipart/form-data" action="{{ route('admin.reservuars-equipment.update', $equipment->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <br>
                    <label for="title">Заголовок:</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $equipment->title }}">
                    <br>
                    <label for="text">Текст:</label>
                    <textarea name="text" id="text"  rows="5" class="form-control input-text">{{ $equipment->text }}</textarea>
                    <br>
                    <label for="parameters">Параметры:</label>
                    <textarea name="parameters" id="parameters"  rows="5" class="form-control input-text">{{ $equipment->parameters }}</textarea>
                    <br>
                    <label for="preview_img">Картинка превью:</label>
                    <input type="file" class="btn btn-warning" id="preview_img" name="preview_img">
                    <br>
                    <label for="drawing">Чертеж:</label>
                    <input type="file" class="btn btn-warning" id="drawing" name="drawing">
                    <br>
                    <label for="drawing">PDF:</label>
                    <input type="file" class="btn btn-warning" id="pdf" name="pdf" >
                    <br>
                    <button class="btn btn-success float-right">Изменить</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection('content')
