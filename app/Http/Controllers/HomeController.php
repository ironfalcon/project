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
        return redirect()->route('home');
    }
}
