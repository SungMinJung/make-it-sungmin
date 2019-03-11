<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Support\Facades\DB;



class QnaController extends Controller
{
    public function create()
    {

        return view('admin.question.qna.create');

    }
    public function common(){
        return view('admin.question.common');
    }
    

    // ************************************************************
    public function store(Request $request,String $type)
    {
        // dd($type);
    if($type==='notice')
    {

        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);
        $notices = new Notice([
            'subject' => $request->get('subject'),
            'content' => $request->get('content'),
            'category'=>'notice',
            'cnt'=>0,
        ]);
        $notices->save();
        // $query = Notice::orderBy('id', 'desc');
        // $query = $query->where('category', 'notice')->paginate(10);
        // $notices=$query;
    //  return redirect()->route('admin.notice.index',compact('notices'));
    return redirect()->route('admin.notice.index');

        
        
    }
    else if($type==='qna')
    {

            $request->validate([
                'subject' => 'required',
                'content' => 'required',
            ]);
            $notices = new Notice([
                'subject' => $request->input('subject'),
                'content' => $request->input('content'),
                'category'=>'qna',
                'cnt'=>0,
            ]);
            $notices->save();
            // $query = Notice::orderBy('id', 'desc');
            // $query = $query->where('category', 'qna')->paginate(10);
            // $notices2=$query;
    // return redirect()->route('admin.notice.index',compact('notices2'));
    return redirect()->route('admin.notice.index');

            
        }
        
        
    }




}
