<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\Docs;

class DocsController extends Controller
{
    //
    
    public function index()
    {
        $allDocs = Docs::all();
        return view('admin_panel.docs.index',['allDocs' =>$allDocs,]);
    }

    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'img' => 'image',]);

        $newDocs = new Docs();
        if($request->file('img')) {
            $img = $request->file('img');
            $filename = time() . "." . $img->getClientOriginalExtension();
            Image::make($img)->save(public_path('files/img/docs/' . $filename));
            $img = $filename;
            $newDocs->img = $img;
            $newDocs->save();
        }

        return redirect()->route('admin.docs.index');
    }

    public function delete($id)
    {
        if(!Auth()->check())
        {
            return redirect()->route('home');
        }   
        if(File::exists(public_path('files/img/docs/'.Docs::find($id)->img))) 
        {
            File::delete(public_path('files/img/docs/'.Docs::find($id)->img));
        }
        Docs::find($id)->delete();
        return redirect()->route('admin.docs.index');
    }
}
