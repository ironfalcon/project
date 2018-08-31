<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextDescription;

class TextDescriptionController extends Controller
{
    //
    public function update(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        //Проверка на отсутстви пустых полей
        $this->validate($request, [
            'text' => 'required',]);
        
        $textDescritpion = TextDescription::find($id);
        $textDescritpion->text = $request->text;
        $textDescritpion->save();

        return redirect()->route('home');
    }


}
