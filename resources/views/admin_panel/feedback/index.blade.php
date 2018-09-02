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
                                    <a href="#" data-toggle="modal" data-target="#addMails" class="btn btn-warning">Добавить</a>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                @foreach($allMails as $Mails)
                                    <div class="col-md-9 text-left pt-2" style="color:#000; border-bottom: solid 1px rgb(50, 167, 237);">
                                            {{$Mails->mail}}
                                    </div>
                                    <div class="col-md-3 text-right" style="color:#000; border-bottom: solid 1px rgb(50, 167, 237);">
                                        <!-- форма удаления -->
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.feedback.delete', $Mails->id] ])!!}
                                        {{ csrf_field() }}
                                        <button alt="Удалить" class="btn btn-danger mb-2" onclick="return confirm('Вы уверены?')">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                                </div>
                            </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addMails" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Почта обратной связи</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-left">
                        <form enctype="multipart/form-data" action="{{ route('admin.feedback.add') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>E-mail:</label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="mail" name="mail" type="email" required  class="form-control">
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
