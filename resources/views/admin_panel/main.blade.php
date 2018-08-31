@extends('layouts.app_admin_panel')

@section('content')
<div class="main-admin pt-5">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                Продукции
                </div>
                <div class="card-body">
                    <h5 class="card-title">Блоки изображений - "Продукции"</h5>
                    <p class="card-text">В панели администратора можно изменить блоки с изображениями на страницах продукции, для того чтобы начать работу с данными блоками выберите раздел</p>
                    <p><a href="{{route('admin.partners.index')}}" class="btn btn-primary">Партнеры</a>
                    <a href="{{route('admin.docs.index')}}" class="btn btn-primary">Нормативные документы</a></p>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                Обратная связь
                </div>
                <div class="card-body">
                    <h5 class="card-title">Почта для обратной связи</h5>
                    <p class="card-text">В данном блоке можно будет изменить почту, на которую будут приходить сообщения из блока - "Обратная связь"</p>
                    <p><a href="#" class="btn btn-warning">Изменить</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
