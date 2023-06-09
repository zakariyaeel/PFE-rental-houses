<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        return view('contactus');
    }
    public function send(Request $request){
        $data = [
            'name'=> $request->name,
            'email'=>$request->email,
            'sujet'=>$request->sujet,
            'message'=>$request->message
        ];

        Mail::to('projectstesteroff@gmail.com')->send(new SendMail($data));


        return redirect('/');
    }
}
