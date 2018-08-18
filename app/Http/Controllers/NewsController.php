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

    public function index_admin()
    {
        $allNews = News::all();
        return view('admin_panel.news.index',['allNews' =>$allNews,]);
    }


    public function show($id)
    {
        $news = News::find($id);
        return view('news.show',['news' => $news,]);
    }

    public function create()
    {
        return view('admin_panel.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',]);
        $news = new News();
        if($request->file('photo')) {
            $photo = $request->file('photo');
            $filename = time() . "." . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('files/news_image' . $filename));
            $photo = $filename;
            $news->img = $photo;
        }

        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->create_at = Carbon::now('Europe/Samara');
        $news->update_at = Carbon::now('Europe/Samara');
        $news->save();

        return redirect()->route('news.index');


    }
}
