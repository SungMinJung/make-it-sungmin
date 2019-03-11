@extends('layouts.app')
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script>
</head>
@section('content')

{{-- <script src="http://code.jquery.com/jquery-1.7.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=AIzaSyBYR3HOUCckMRzV1ko1HnAudr2k8WkZXhs"></script> --}}


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

// 새로고침 방지 버튼은 제외
function noEvent() {
    if (event.keyCode == 116) {
        event.keyCode= 2;
        return false;
    }
    else if(event.ctrlKey && (event.keyCode==78 || event.keyCode == 82))
    {
    return false;
    }
}
document.onkeydown = noEvent;

// 뒤로가기 방지
history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};
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
        <div class="row" style="margin-left:420px;">
            <img src="/img/contactmakeit.svg" alt="" style="width:368px;height:184;margin-bottom:40px;">
        </div>
        <div class="row">
            <p style="font-size:60px;font-weight:600;color:#ffffff;margin:0px auto;font-family:'Noto Sans',sans-serif;">
                Thank you for contacting us!
            </p>
        </div>
        <div class="row">
            <p style="font-size:40px;font-weight:lighter;color:#ffffff;margin:0px auto;padding-top:20px;font-family:'Noto Sans',sans-serif;">
                We will soon answering the message.
            </p>
        </div>
    </div>
</div>

<div id="googleMap" style="width:1920px;height:444px;margin:0px auto;"></div>


@endsection