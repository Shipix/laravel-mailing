<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ControllerEmail extends Controller
{
    public function index(){
        return view ('contact');
    }
    public function store(Request $request){
        $Send = $request->mail;
        Mail::to('shipix@hotmail.fr')->send(new MailSend($Send )); 
        return redirect()->back();
    }
}
