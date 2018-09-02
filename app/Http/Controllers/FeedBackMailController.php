<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBackMail;
use Carbon\Carbon;

class FeedBackMailController extends Controller
{
    //
    
    public function index()
    {
        $allMails = FeedBackMail::all();
        return view('admin_panel.feedback.index',['allMails' =>$allMails,]);
    }
    public function store(Request $request)
    {
        if(!Auth()->check()){
            return redirect()->route('home');
        }

        $this->validate($request, [
            'mail' => 'required',]);

        $newMails = new FeedBackMail();
        $newMails->mail = $request->mail;
        $newMails->created_at = Carbon::now('Europe/Samara');
        $newMails->updated_at = Carbon::now('Europe/Samara');
        $newMails->save();

        return redirect()->route('admin.feedback.index');
    }

    public function delete($id)
    {
        if(!Auth()->check())
        {
            return redirect()->route('home');
        }   
        FeedBackMail::find($id)->delete();
        return redirect()->route('admin.feedback.index');
    }

}
