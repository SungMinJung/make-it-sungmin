<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Portfolio;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portList = Portfolio::all();
        
        return view("admin.portfolio.index",compact('portList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $path = 'public/hyungyu';
        $file = $request->file('title_imgurl');
        $result = $file->store($path);

        $url = Storage::url($result);

        $port = new Portfolio([
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'title_imgurl' => $url,
            'main_title' => $request->input('main_title'),
            'dep_date' => $request->input('dep_date'),
            'link' => $request->input('link'),
            'main_imgurl' => $request->input('summernote')
        ]);
        // $port->main_imgurl = $request->input('summernote');
        $port->save();
        
        return redirect('admin/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $port = Portfolio::find($id);

        return view("admin.portfolio.show", compact('port'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $port = Portfolio::find($id);

        return view("admin.portfolio.edit", compact('port'));
        
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
        //
        
        $path = 'public/hyungyu';
        $file = $request->file('title_imgurl');
        $result = $file->store($path);

        $url = Storage::url($result);

        $port = Portfolio::find($id);
        $port->category = $request->get('category');
        $port->main_title = $request->get('main_title');
        $port->link = $request->get('link');
        $port->dep_date = $request->get('dep_date');

        $port->title = $url;
        $port->main_imgrul = $request->input('summernote');
        $port->update();

        return redirect('admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $port = Portfolio::find($id);
        
        $port->delete();
        return redirect('admin/portfolio');
    }
}
