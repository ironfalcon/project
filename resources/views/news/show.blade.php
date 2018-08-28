@extends('layouts.app_with_image')
@section('content')
   <!--Header-->
   <div id="second-deader">
        <div class="container">
            <div class="row">
                <div class="header-text">
                    <div class="col-md-12">
                        <div class="text-center page-title">
                        {{$news->title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <a href="{{ route('home')}}" style="text-decoration: none; color: white;">Главная</a> <span style="color:rgb(50, 167, 237);">/</span>
                <a href="{{ route('news')}}" style="text-decoration: none; color: white;"> Новости </a>
                 <span style="color:rgb(50, 167, 237);">/</span> {{$news->title}}
                </div>
            </div>
        </div>
    </div>
    <!--Header END-->
    <div id="newses">
        <div class="container">
            <div class="row">
                <!--News pref-->
                <div class="news-pre">
                    <h1 class="col-md-12">{{$news->title}}</h1>
                    <div class="col-md-12 news-description">
                        <a  data-toggle="modal" href="" data-target="#img-modal">
                        <img src="{{ asset('files/news_image/'.$news->img) }}" width="300px" class="news-img rounded float-left">
                        </a>
                        {!!$news->text!!}
                        </div>
                    <div class="col-md-12">
                        <span class="date-line">{{$news->created_at}}</span>
                    </div>
                </div>
                <!--News pref END-->
            </div>
        </div>
    </div>
                    <!-- Load Photo in Modal -->
                    <div class="modal fade" id="img-modal" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">Резервуары</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-thumbnail" alt="Rezervuars1" src="{{ asset('files/news_image/'.$news->img) }}"/>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
@endsection('content')
{{--<img src="/uploads/news_photo/{{ $new->photo }}">--}}
{{--{{ asset('files/img/fav.ico') }}--}}