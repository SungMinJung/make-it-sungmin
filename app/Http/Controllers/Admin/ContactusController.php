<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contactus;
use Illuminate\Support\Facades\DB;

class ContactusController extends Controller
{
    public function index() 
    {
        $contacts = Contactus::all();
        $contacts = DB::table('contactuses')->orderBy('id', 'desc')->paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id) 
    {
        $contact = Contactus::find($id);

        return view('admin.contact.show', compact('contact'));
    }

    public function destroy($id) 
    {
        $contact = Contactus::find($id);
        $contact->delete();

        return redirect()->route('admin.contact');
    }
}
