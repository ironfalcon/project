@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">

        <!-- Кнопка добавить новое оборудование-->
        <a href="{{ route('admin.reservuars-equipment.create') }}"><button class="btn btn-success">Создать</button></a>
        <div id="produtions-MC-blocks">
            <div class="container-fluid">
                <div class="row">
                    @foreach($allReservuarsEquipment as $production)
                        //поставил что бы кнопки edit delete совсем верстку не сломали
                        <div class="col-md-12"></div>
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
                        </div>
                        <!-- Кнопка изменения -->
                        <a class="col-md-12 " href="{{ route('admin.reservuars-equipment.edit', $production->id) }}"> edit</a>
                        <!-- форма удаления -->
                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.reservuars-equipment.delete', $production->id] ])!!}
                        <button style="margin-left:10px;" class="btn btn-danger float-right col-md-12" onclick="return confirm('Вы уверены?')">Удалить</button>
                        {!! Form::close() !!}

                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection('content')
