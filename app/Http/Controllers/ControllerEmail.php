<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEmail extends Controller
{
    public function index(){
        return view ('contact');
    }
}
