@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">

        <!-- Кнопка добавить новое оборудование-->
        <!--<a href="{{ route('admin.reservuars-equipment.create') }}"><button class="btn btn-success">Создать</button></a>-->
        <div id="produtions-MC-blocks">
            <div class="container-fluid">
                <div class="row">
                    <!-- Кнопка добавить продукцию-->
                        <div class = "col-md-3 block-el">
                            <!--Проверять если нету превью имейдж то подставлять чертеж (из папки drawing)-->
                            <img class="block-image" src=" {{asset('files/img/plus.jpg') }} ">
                            <a  class="col-md-12 block-text" href="{{ route('admin.reservuars-equipment.create') }}">
                                <span style="color:#fff;"><b>Добавить продукцию</b></span>
                            </a>
                        </div>
                    <!-- Вывод списка продукции-->
                    @foreach($allReservuarsEquipment as $production)
                        <div class = "col-md-3 block-el">
                            <!--Проверять если нету превью имейдж то подставлять чертеж (из папки drawing)-->
                            @if($production->preview_img)
                                <img class="block-image" src=" {{asset('files/reservuars_equipment_img/prev_img/'.$production->preview_img) }} ">
                            @else
                                <img class="block-image" src=" {{asset('files/reservuars_equipment_img/drawing/'.$production->drawing) }} ">
                            @endif
                            <a  class="col-md-12 block-text" href="{{ route('reservuars-equipment.show', $production->id) }}">
                                {{$production->title}}
                            </a>
                            <div class="col-md-12 admin-icons-prod text-right">
                                <!-- Кнопка изменения -->
                                <a alt="Изменить" class="btn btn-warning"  href="{{ route('admin.reservuars-equipment.edit', $production->id) }}">
                                <i class="fas fa-pen-square"></i>
                                </a>
                                <!-- форма удаления -->
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.reservuars-equipment.delete', $production->id] ])!!}
                                <button alt="Удалить" style="margin-top:5px;" class="btn btn-danger" onclick="return confirm('Вы уверены?')">
                                <i class="fas fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection('content')
