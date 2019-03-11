<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //
    public function store(Request $request){
        $path = 'public/hyungyu';
        $file = $request->file('file');
        $result = $file->store($path);

        $url = Storage::url($result);
        return $url;
    }
}
