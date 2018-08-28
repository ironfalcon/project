<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Support\Facades\Auth;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

//use Intervention\Image\Facades\Image;
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
        // проверка зарегистрирован ли пользователь, если нет
        // редиректит на главную сайта
        if(!Auth()->check()){
            return redirect()->route('home');
        }
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
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'img' => 'image',]);
        $news = new News();
        
        if($request->file('photo')) {
            $photo = $request->file('photo');
            $filename = time() . "." . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('files/news_image/' . $filename));
            $photo = $filename;
            $news->img = $photo;
        }

        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->created_at = Carbon::now('Europe/Samara');
        $news->updated_at = Carbon::now('Europe/Samara');
        $news->save();

        return redirect()->route('news.admin');
    }

    public function edit(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $news = News::find($id);
        return view('admin_panel.news.edit', ['news' => $news,]);
    }

    public function update(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        //Проверка на отсутстви пустых полей
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'img' => 'image',]);

        $news = News::find($id);
        if($request->file('photo')) {
            $photo = $request->file('photo');
            $filename = time() . "." . $photo->getClientOriginalExtension();
            Image::make($photo)->save(public_path('files/news_image/' . $filename));
            $photo = $filename;
            $news->img = $photo;
        }
        $news->title = $request->title;
        $news->description = $request->description;
        $news->text = $request->text;
        $news->updated_at = Carbon::now('Europe/Samara');
        $news->save();
        return redirect()->route('news.admin');
    }

    public function delete($id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        News::find($id)->delete();
        return redirect()->route('news.admin');
    }

}
