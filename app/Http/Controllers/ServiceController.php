<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function web(){
        return view('service.web');
    }
    public function mobile(){
        return view('service.mobile');
    }
    public function responsive(){
        return view('service.responsive');
    }
}
