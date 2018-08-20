<?php

namespace App\Http\Controllers;

use App\ReservuarsEquipment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
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

    public function admin_show()
    {
        $allReservuarsEquipment = ReservuarsEquipment::all();
        return view('admin_panel.productions.reservuars-equipment.index',['allReservuarsEquipment' =>$allReservuarsEquipment,]);
    }

    public function create()
    {
        return view('admin_panel.productions.reservuars-equipment.create');
    }

    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',]);
        $newEquipment = new ReservuarsEquipment();
        if($request->file('preview_img')) {
            $preview_img = $request->file('preview_img');
            $filename = time() . "." . $preview_img->getClientOriginalExtension();
            Image::make($preview_img)->save(public_path('files/reservuars_equipment_img/prev_img/' . $filename));
            $preview_img = $filename;
            $newEquipment->preview_img = $preview_img;
        }

        if($request->file('drawing')) {
            $drawing = $request->file('drawing');
            $filename = time() . "." . $drawing->getClientOriginalExtension();
            Image::make($drawing)->save(public_path('files/reservuars_equipment_img/drawing/' . $filename));
            $drawing = $filename;
            $newEquipment->drawing = $drawing;
        }

        $newEquipment->title = $request->title;
        $newEquipment->parameters = $request->parameters;
        $newEquipment->text = $request->text;
        $newEquipment->pdf ="123";
        $newEquipment->created_at = Carbon::now('Europe/Samara');
        $newEquipment->updated_at = Carbon::now('Europe/Samara');
        $newEquipment->save();

        return redirect()->route('admin.reservuars-equipment.index');
    }
}
