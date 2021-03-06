<?php

namespace App\Http\Controllers;

use App\ReservuarsEquipment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Partners;
use App\Docs;
use App\TextDescription;
use Image;
use File;
//Резервуарное оборудование
class ReservuarsEquipmentController extends Controller
{
    //
    public function index()
    {
        $allReservuarsEquipment = ReservuarsEquipment::all();
        $allPartners = Partners::all();
        $allDocs = Docs::all();
        $MainText = TextDescription::where('type','production')->first();
        $ConcreteText = TextDescription::where('type','reservuars-equipment')->first();
        return view('productions.reservuars-equipment.index',['allReservuarsEquipment' =>$allReservuarsEquipment,'allPartners' =>$allPartners,'allDocs' =>$allDocs,
        'MainText'=>$MainText,'ConcreteText'=>$ConcreteText]);
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
            'text' => 'required',
            'drawing' => 'image',
            'preview_img' => 'image',]);
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

        if($request->file('pdf')) {
            $pdf = $request->file('pdf');
            $filename = time() . "." . $pdf->getClientOriginalExtension();
            $pdf->move(public_path() . '/files/reservuars_equipment_img/pdf/', $filename);
            $newEquipment->pdf = $filename;
        }

        $newEquipment->title = $request->title;
        $newEquipment->parameters = $request->parameters;
        $newEquipment->text = $request->text;
        $newEquipment->created_at = Carbon::now('Europe/Samara');
        $newEquipment->updated_at = Carbon::now('Europe/Samara');
        $newEquipment->save();

        return redirect()->route('admin.reservuars-equipment.index');
    }

    public function edit(Request $request, $id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $equipment = ReservuarsEquipment::find($id);
        return view('admin_panel.productions.reservuars-equipment.edit', ['equipment' => $equipment,]);
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

        $equipment = ReservuarsEquipment::find($id);
        if($request->file('preview_img')) {
            $preview_img = $request->file('preview_img');
            $filename = time() . "." . $preview_img->getClientOriginalExtension();
            Image::make($preview_img)->save(public_path('files/reservuars_equipment_img/prev_img/' . $filename));
            $preview_img = $filename;
            $equipment->preview_img = $preview_img;
        }

        if($request->file('drawing')) {
            $drawing = $request->file('drawing');
            $filename = time() . "." . $drawing->getClientOriginalExtension();
            Image::make($drawing)->save(public_path('files/reservuars_equipment_img/drawing/' . $filename));
            $drawing = $filename;
            $equipment->drawing = $drawing;
        }

        if($request->file('pdf')) {
            $pdf = $request->file('pdf');
            $pdf->store('files/reservuars_equipment_img/pdf/');
            $equipment->pdf = $pdf;
        }

        $equipment->title = $request->title;
        $equipment->parameters = $request->parameters;
        $equipment->text = $request->text;
        $equipment->updated_at = Carbon::now('Europe/Samara');
        $equipment->save();
        return redirect()->route('admin.reservuars-equipment.index');
    }

    public function delete($id)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }
        if(File::exists(public_path('files/reservuars_equipment_img/drawing/'.ReservuarsEquipment::find($id)->drawing))) 
        {
            File::delete(public_path('files/reservuars_equipment_img/drawing/'.ReservuarsEquipment::find($id)->drawing));
        }
        
        if(File::exists(public_path('files/reservuars_equipment_img/prev_img/'.ReservuarsEquipment::find($id)->preview_img))) 
        {
            File::delete(public_path('files/reservuars_equipment_img/prev_img/'.ReservuarsEquipment::find($id)->preview_img));
        }
        
        if(File::exists(public_path('files/reservuars_equipment_img/pdf/'.ReservuarsEquipment::find($id)->pdf))) 
        {
            File::delete(public_path('files/reservuars_equipment_img/pdf/'.ReservuarsEquipment::find($id)->pdf));
        }
        ReservuarsEquipment::find($id)->delete();
        return redirect()->route('admin.reservuars-equipment.index');
    }

    public function show_pdf($pdf)
    {
        return response()->file(public_path('files/reservuars_equipment_img/pdf/' . $pdf));
    }
}
