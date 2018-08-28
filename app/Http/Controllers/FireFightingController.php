<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FireFighting;
use Carbon\Carbon;
use Image;
use File;

class FireFightingController extends Controller
{

    //
    public function index()
    {
        $allFireFighting = FireFighting::all();
        return view('productions.fire-fighting.index',['allFireFighting' =>$allFireFighting,]);
    }

    public function show($id)
    {
        $production = FireFighting::find($id);
        return view('productions.fire-fighting.show',['production' => $production,]);
    }

    public function admin_show()
    {
        $allFireFighting = FireFighting::all();
        //Пример позволяет открыть pdf в браузере
        //return response()->file(public_path('files/fire_fighting/prev_img/курсовая.pdf'));
        return view('admin_panel.productions.fire-fighting.index',['allFireFighting' =>$allFireFighting,]);
    }

    public function create()
    {
        return view('admin_panel.productions.fire-fighting.create');
    }

    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'drawing' => 'image',
            'preview_img' => 'image',]);
        $newProduction = new FireFighting();
        if($request->file('preview_img')) {
            $preview_img = $request->file('preview_img');
            $filename = time() . "." . $preview_img->getClientOriginalExtension();
            Image::make($preview_img)->save(public_path('files/fire_fighting/prev_img/' . $filename));
            $preview_img = $filename;
            $newProduction->preview_img = $preview_img;
        }

        if($request->file('drawing')) {
            $drawing = $request->file('drawing');
            $filename = time() . "." . $drawing->getClientOriginalExtension();
            Image::make($drawing)->save(public_path('files/fire_fighting/drawing/' . $filename));
            $drawing = $filename;
            $newProduction->drawing = $drawing;
        }

        if($request->file('pdf')) {
            $pdf = $request->file('pdf');
            $filename = time() . "." . $pdf->getClientOriginalExtension();
            $pdf->move(public_path() . '/files/fire_fighting/pdf/', $filename);
//            $pdf->store('files/fire_fighting/pdf/');
//            $newProduction->pdf = $pdf;
//            $pdf = $request->file('pdf');
//            $filename = time() . "." . $pdf->getClientOriginalExtension();
//            $pdf->store(public_path('files/fire_fighting/pdf/' . $filename));
            $newProduction->pdf = $filename;
        }

        $newProduction->title = $request->title;
        $newProduction->parameters = $request->parameters;
        $newProduction->text = $request->text;
//        $newProduction->pdf = "123";
        $newProduction->created_at = Carbon::now('Europe/Samara');
        $newProduction->updated_at = Carbon::now('Europe/Samara');
        $newProduction->save();

        return redirect()->route('admin.fire-fighting.index');
    }

    public function edit(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $production = FireFighting::find($id);
        return view('admin_panel.productions.fire-fighting.edit', ['production' => $production,]);
    }

    public function update(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        //Проверка на отсутстви пустых полей
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'drawing' => 'image',
            'preview_img' => 'image',]);

        $production = FireFighting::find($id);
        if($request->file('preview_img')) {
            $preview_img = $request->file('preview_img');
            $filename = time() . "." . $preview_img->getClientOriginalExtension();
            Image::make($preview_img)->save(public_path('files/fire_fighting/prev_img/' . $filename));
            $preview_img = $filename;
            $production->preview_img = $preview_img;
        }

        if($request->file('drawing')) {
            $drawing = $request->file('drawing');
            $filename = time() . "." . $drawing->getClientOriginalExtension();
            Image::make($drawing)->save(public_path('files/fire_fighting/drawing/' . $filename));
            $drawing = $filename;
            $production->drawing = $drawing;
        }

        if($request->file('pdf')) {
            $pdf = $request->file('pdf');
            $pdf->store('files/fire_fighting/pdf/');
            $production->pdf = $pdf;
//            $pdf = $request->file('pdf');
//            $filename = time() . "." . $pdf->getClientOriginalExtension();
//            $pdf->store(public_path('files/fire_fighting/pdf/' . $filename));
//            $newProduction->pdf =$filename;
        }

        $production->title = $request->title;
        $production->parameters = $request->parameters;
        $production->text = $request->text;
        $production->updated_at = Carbon::now('Europe/Samara');
        $production->save();
        return redirect()->route('admin.fire-fighting.index');
    }

    public function delete($id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        
        if(File::exists(public_path('files/fire_fighting/drawing/'.FireFighting::find($id)->drawing))) 
        {
            File::delete(public_path('files/fire_fighting/drawing/'.FireFighting::find($id)->drawing));
        }
        
        if(File::exists(public_path('files/fire_fighting/prev_img/'.FireFighting::find($id)->preview_img))) 
        {
            File::delete(public_path('files/fire_fighting/prev_img/'.FireFighting::find($id)->preview_img));
        }
        
        if(File::exists(public_path('files/fire_fighting/pdf/'.FireFighting::find($id)->pdf))) 
        {
            File::delete(public_path('files/fire_fighting/pdf/'.FireFighting::find($id)->pdf));
        }
        FireFighting::find($id)->delete();
        return redirect()->route('admin.fire-fighting.index');
    }

    public function show_pdf($pdf)
    {
        return response()->file(public_path('files/fire_fighting/pdf/' . $pdf));
    }
}
