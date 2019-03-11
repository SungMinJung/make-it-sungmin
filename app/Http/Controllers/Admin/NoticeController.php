<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Support\Facades\DB;


class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices=DB::table('notices')->where('category','notice')->orderBy('id','desc')->paginate(10);
        // $notices = Notice::where('category', 'notice')->get();
        
        // $qnas = Notice::where('category', 'qna')->get();
        $qnas=DB::table('notices')->where('category','qna')->orderBy('id','desc')->paginate(10);


        return view('admin.question.index',compact('notices', 'qnas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


             return view('admin.question.notice.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,String $type)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice=Notice::find($id);
        $notice->cnt++;
        $notice->save();
        return view('admin.question.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notices=Notice::find($id);
        return view('admin.question.notice.edit',compact('notices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $notice = Notice::find($id);
        $notice->subject = $request->input('subject');
        $notice->content = $request->input('content');
        $notice->save();

        return redirect()->route('admin.notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $notice=Notice::where('id',$id)->delete();
        $notice=Notice::find($id);
        $notice->delete();


        return redirect()->route('admin.notice.index');
    }
}
