@extends('layouts.app')
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
@section('content')

{{-- <script src="http://code.jquery.com/jquery-1.7.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script> --}}

<style>

input {
    border-bottom-color: #ffffff;
    border-width: 1px;
    font-size: 20px;
    background: transparent;
    border-top: none;
    border-left: none;
    border-right: none;
    color: #ffffff;
    margin:10px 0px 10px 0px;
    width: 248px;
    font-family: 'Noto Sans', sans-serif;
}

textarea {
    font-size: 20px;
    width: 509px;
    height: 226px;
    background: transparent;
    border-color: #ffffff;
    color: #ffffff;
    border-width: 1px;
    margin-top: 10px;
    font-family: 'Noto Sans', sans-serif;
}

</style>


<script>
var myCenter=new google.maps.LatLng(37.482189, 126.996703);

function initialize() {

    var mapProp = {
        center:myCenter,
        zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker=new google.maps.Marker({
        position:myCenter,
    });
    marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// recaptcha관련코드
function FormSubmit() { 
    if (grecaptcha.getResponse() == "") { 
        alert("리캡챠를 체크해야 합니다."); 
        return false; 
    } 
    else { 
        return true; 
    } 
} 

</script>

<div class="row" style="background-image:url('/img/contactbg.jpg');padding-top:100px;width:1920px;height:820px;background-repeat:no-repeat;margin:0px auto;">
    <div class="container">
        <div class="row">
            <p class="contacttitle">Contact us</p>
        </div>
        <div class="row"><br></div>
        <div class="row">
            <p class="contactcontent">항상 고객과의 좋은 인연을 기다리고 있습니다.</p>
        </div>
        <div class="row"><br><br><br><br></div>
        <div class="row">
            <div class="col-3">
                <img src="/img/contactmakeit.svg" alt="" style="width:368px;height:184;margin-bottom:40px;">
                <div class="row" style="margin-bottom:60px;">
                    <div class="col-1 contactneed">
                        Tel<br><br>
                        Email<br><br>
                        Address
                    </div>
                    <div class="col-1 contactinfo" style="white-space:nowrap;position:relative;bottom:8px;">
                        02 - 6081 - 1933<br><br>
                        contact@make-it.co.kr<br><br>
                        서울시 서초구 방배로89 성지빌딩 402호
                    </div>
                </div>
                <div class="row" style="margin-left:100px;">
                    <img src="/img/insta.png" alt="" style="margin-right:20px;">
                    <img src="/img/facebook.png" alt="" style="margin-right:20px;">
                    <img src="/img/twitter.png" alt="">
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <form action="{{ route('contact.store') }}" method="post" onsubmit="return FormSubmit();">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <input type="text" name="contact_name" placeholder="Name">
                        </div>
                        <div class="col-2" style="position:relative;left:16px;">
                            <input type="tel" name="contact_tel" placeholder="Telephone Number" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                    </div>
        
                    <div class="row"><br><br></div>
        
                    <div class="row">
                        <div class="col-2">
                            <input type="email" name="contact_email" placeholder="Email Address">
                        </div>
                        <div class="col-2" style="position:relative;left:16px;">
                            <input type="text" name="contact_refsite" placeholder="Reference Site or App">
                        </div>
                    </div>
        
                    <div class="row"><br><br></div>
        
                    <div class="row">
                        <div class="col-4">
                            <textarea name="contact_content" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="g-recaptcha" data-sitekey="6LcgXIsUAAAAANsy3IcfLJyBMgGLT74uoj73WaiQ" style="position:relative;top:38px;"></div>
                    <button type="submit" class="btn blue" style="position:relative;left:288px;bottom:40px;">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="googleMap" style="width:1920px;height:444px;margin:0px auto;"></div>


@endsection