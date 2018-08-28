<?php

namespace App\Http\Controllers;

use Image;
use File;
use Illuminate\Http\Request;
use App\Clients;

class ClientsController extends Controller
{
    //
    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'img' => 'image',]);

        $newClient = new Clients();
        if($request->file('img')) {
            $img = $request->file('img');
            $filename = time() . "." . $img->getClientOriginalExtension();
            Image::make($img)->save(public_path('files/img/clients/' . $filename));
            $img = $filename;
            $newClient->img = $img;
            $newClient->save();
        }

        return redirect()->route('home');
    }

    public function delete($id)
    {
        if(!Auth()->check())
        {
            return redirect()->route('home');
        }   
        if(File::exists(public_path('files/img/clients/'.Clients::find($id)->img))) 
        {
            File::delete(public_path('files/img/clients/'.Clients::find($id)->img));
        }
        Clients::find($id)->delete();
        return redirect()->route('home');
    }
}
