<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class QnaController extends Controller
{
    public function index(){

        
         $notices=Notice::orderBy('category', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view('qna.index',compact('notices'));

    }

}
