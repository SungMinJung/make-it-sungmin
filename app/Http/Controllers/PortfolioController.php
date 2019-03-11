<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{
    
    public function index(){
        
        // $portfolio = collect($portfolio)->all();
        $portList = Portfolio::all();
        
        return view('portfolio.index',compact('portList'));
    }

    public function index2($seq){
        $portList = Portfolio::all();
        

        foreach($portList as $port){
            if($port['title'] == $seq)
                {
                    return view('portfolio.port',compact('port'));
                }
        }
        
    }
}
