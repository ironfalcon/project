@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">

        <!-- Кнопка добавить новое оборудование-->
        <!--<a href="{{ route('admin.fire-fighting.create') }}"><button class="btn btn-success">Создать</button></a>-->
        <div id="produtions-MC-blocks"  style="background-color:#fff;">
            <div class="container-fluid">
                <div class="row">
                            <div class="row pb-3">
                                <div class="col-md-12 text-right">
                                    <a href="#" data-toggle="modal" data-target="#addPartners" class="btn btn-warning">Добавить</a>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                @foreach($allPartners as $Partners)
                                    <div class="col-md-4 text-center" style="padding:2px;">
                                        <div style="border: solid 1px rgb(50, 167, 237);">
                                            <img src="{{asset('files/img/partners/'.$Partners->img)}}" height="200px" >
                                        </div>
                                        <div class="col-md-12 admin-icons-prod text-right">
                                            <!-- форма удаления -->
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.partners.delete', $Partners->id] ])!!}
                                            {{ csrf_field() }}
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

        <div class="modal fade" id="addPartners" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Наши заказчики</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-left">
                        <form enctype="multipart/form-data" action="{{ route('admin.partners.add') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Наши заказчики:</label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="img" name="img" type="file" class="btn btn-warning">
                                        </div>           
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
