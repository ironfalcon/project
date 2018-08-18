<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        $allNews = News::all();
        return view('news.index',['allNews' =>$allNews,]);
    }


    public function show($id)
    {
        $news = News::find($id);
        return view('news.show',['news' => $news,]);
    }
}
