<?php

namespace App\Http\Controllers;

use App\MainPage;
use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;

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
        $allClients = Clients::all();
        return view('index',['allClients' =>$allClients,]);
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

    public function send_mail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',]);
        // здесь указываем почту на которое будут приходить письма
        // по хорошему нужно добавить в базу или в какой нибудь файлик конфигурации
        // что бы была возможность менять почту из админки
        $admin_mail = 'ironfalcon@yandex.ru';
        $name = $request->name;
        $user_mail = $request->email;
        $phone = $request->subject;
        $text = $request->message;
        $data = array('name'=> $name, 'user_mail' => $user_mail, 'phone' => $phone, 'text' => $text);
        // 1) адрес вьюшки она в корне, поэтому просто mail
        // 2) массив с данными которые посылаем во вьюшку
        // 3) получатель письма
        Mail::send('mail', $data, function($message) use($admin_mail) {
            $message->to($admin_mail, 'Что то еще')->subject
            ('Обратная связь от пользователя');
             //почта с которой отправленно          //От кого пришло
            $message->from(env('MAIL_USERNAME'),'Обратная связь с сайта');
        });

        return redirect()->route('home');

    }
}
