<?php

namespace App\Http\Controllers;

use App\Partners;
use App\Docs;
use App\TextDescription;
use Illuminate\Http\Request;

class ReservuarsMetalConstructionController extends Controller
{
    //
    public function index()
    {
        $allPartners = Partners::all();
        $allDocs = Docs::all();
        $MainText = TextDescription::where('type','production')->first();
        $ConcreteText = TextDescription::where('type','reservuars-metal-construction')->first();
        return view('productions.reservuars-metal-construction.index',['allPartners' =>$allPartners,'allDocs' =>$allDocs,
        'MainText'=>$MainText,'ConcreteText'=>$ConcreteText]);
    }
}
