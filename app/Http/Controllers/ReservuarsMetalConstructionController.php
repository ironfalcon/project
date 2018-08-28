<?php

namespace App\Http\Controllers;

use App\Partners;
use App\Docs;
use Illuminate\Http\Request;

class ReservuarsMetalConstructionController extends Controller
{
    //
    public function index()
    {
        $allPartners = Partners::all();
        $allDocs = Docs::all();
        return view('productions.reservuars-metal-construction.index',['allPartners' =>$allPartners,'allDocs' =>$allDocs,]);
    }
}
