<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use App\Notifications\Makeit;

class ContactusController extends Controller
{

    /**
     * contactus메인페이지
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * contactus의 데이터가 나타나는 곳
     */
    public function admin()
    {
        $contactuses = Contactus::all();

        return view('admin.contact.index', compact('contactuses'));
    }

    public function store(Request $request) 
    {
        // recaptcha 확인코드
        if(isset($_POST['g-recaptcha-response'])){ 
            $captcha=$_POST['g-recaptcha-response']; 
        } 
        if(!$captcha) { 
            echo '등록폼에 리캡챠를 확인하세요.'; 
        } 
        $secretKey = "6LcgXIsUAAAAAMavKbPuALORsWbYw16IST1k_zHv"; 
        $ip = $_SERVER['REMOTE_ADDR']; 
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip); 
        $responseKeys = json_decode($response, true); 
        if(intval($responseKeys["success"]) !== 1) { 
            // echo '검증을 통과하지 못했습니다.';
        } 
        // else { echo '검증을 통과 했습니다.'; 
        // }
        
        $contactus = new Contactus([
            'contact_name' => $request->get('contact_name'),
            'contact_tel' => $request->get('contact_tel'),
            'contact_email' => $request->get('contact_email'),
            'contact_refsite' => $request->get('contact_refsite'),
            'contact_content' => $request->get('contact_content'),
        ]);
        $contactus->save();

        $contactus = Contactus::first();
        // $contactus->notify(new Makeit());

        return view('contact.aftersend');
    }
}
