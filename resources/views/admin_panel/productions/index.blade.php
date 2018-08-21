@extends('layouts.app_admin_panel')

@section('content')
<div class="admin-container">
    <div class="container" style="padding-top:20px;">

        <!-- Отображение типов продукции для админки-->
        <div id="produtions">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 productions-element">
                        <a href="{{ route('admin.reservuars-equipment.index') }}">
              <span class="icons">
                <span class="icon-rezervuar_ob"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
              </span>
                            <p>Резервуарное оборудование</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('reservuars_metal_construction.index') }}">
              <span class="icons">
                  <span class="icon-Rezervuat_construc"><span class="path1"></span><span class="path2"></span></span>
              </span>
                            <p>Резервуарные металлоконструкции</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('admin.fire-fighting.index') }}">
                            <span class="icons">
                                <span class="icon-pojar"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                            </span>
                            <p>Подслойное пожаротушение</p>
                        </a>
                    </div>
                    <div class="col-md-3 productions-element">
                        <a href="{{ route('admin.metal-construction-buldings.index') }}">
                            <span class="icons">
                                <span class="icon-construct"><span class="path1"></span><span class="path2"></span></span>
                            </span>
                            <p>Металлоконструкции зданий</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection('content')
