<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\Partners;

class PartnersController extends Controller
{
    //
    
    public function index()
    {
        $allPartners = Partners::all();
        return view('admin_panel.partners.index',['allPartners' =>$allPartners,]);
    }

    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'img' => 'image',]);

        $newPartners = new Partners();
        if($request->file('img')) {
            $img = $request->file('img');
            $filename = time() . "." . $img->getClientOriginalExtension();
            Image::make($img)->save(public_path('files/img/partners/' . $filename));
            $img = $filename;
            $newPartners->img = $img;
            $newPartners->save();
        }

        return redirect()->route('admin.partners.index');
    }

    public function delete($id)
    {
        if(!Auth()->check())
        {
            return redirect()->route('home');
        }   
        if(File::exists(public_path('files/img/partners/'.Partners::find($id)->img))) 
        {
            File::delete(public_path('files/img/partners/'.Partners::find($id)->img));
        }
        Partners::find($id)->delete();
        return redirect()->route('admin.partners.index');
    }
}
