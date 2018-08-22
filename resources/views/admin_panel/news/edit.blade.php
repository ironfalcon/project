@extends('layouts.app_admin_panel')

@section('content')

<div class="admin-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Редактирование новости</h3>
            </div>
            <div class="col-md-12">

                <form enctype="multipart/form-data" action="{{ route('news.update', $news->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <br>
                        <label for="title">Заголовок:</label>
                        <input required type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                        <br>
                        <label for="description">Краткое описание:</label>
                        <input required type="text" class="form-control" name="description" id="description" value="{{ $news->description }}">
                        <br>
                        <label for="text">Текст новости:</label>
                        <textarea required name="text" id="text"  rows="5" class="summernote form-control input-text">{{ $news->text }}</textarea>
                        <br>
                        <label for="img">Картинка:</label>
                        <input type="file" class="btn btn-warning" id="img" name="photo">
                        <br>
                        <button class="btn btn-warning float-right">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection('content')
{{--{{ route('news.update') }}--}}