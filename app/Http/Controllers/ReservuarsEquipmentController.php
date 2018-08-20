<?php

namespace App\Http\Controllers;

use App\ReservuarsEquipment;
use Illuminate\Http\Request;
//Резервуарное оборудование
class ReservuarsEquipmentController extends Controller
{
    //
    public function index()
    {
        $allReservuarsEquipment = ReservuarsEquipment::all();
        return view('productions.reservuars-equipment.index',['allReservuarsEquipment' =>$allReservuarsEquipment,]);
    }

    public function show($id)
    {
        $production = ReservuarsEquipment::find($id);
        return view('productions.reservuars-equipment.show',['production' => $production,]);
    }
}
