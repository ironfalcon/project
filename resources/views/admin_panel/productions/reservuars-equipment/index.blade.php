@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">

        <!-- Кнопка добавить новое оборудование-->
        <a href="{{ route('production.create') }}"><button class="btn btn-success">Создать</button></a>
        <div id="produtions-MC-blocks">
            <div class="container-fluid">
                <div class="row">
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection('content')
