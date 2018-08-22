<?php

namespace App\Http\Controllers;

use App\MainPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainpage = MainPage::find(1);
        return view('index', ['mainpage' => $mainpage,]);
    }

    public function update(Request $request)
    {
        if($request->AboutCompany){
           $update = MainPage::find(1);
           $update->AboutCompany = $request->AboutCompany;
           $update->save();
        }
        if($request->AboutProduction){
           $update = MainPage::find(1);
           $update->AboutProduction = $request->AboutProduction;
           $update->save();
        }
        if($request->MainPhone){
           $update = MainPage::find(1);
           $update->MainPhone = $request->MainPhone;
           $update->SecondPhone = $request->SecondPhone;
           $update->PhoneThree = $request->PhoneThree;
           $update->MainAdress = $request->MainAdress;
           $update->Email = $request->Email;
           $update->save();
        }
        return redirect()->route('home');
    }
}
