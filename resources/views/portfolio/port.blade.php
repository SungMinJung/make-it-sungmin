@extends('layouts.app')

@section('content')
    
<div class="row" style="margin: 0 auto; background-image:url('/image/port-title.jpg'); height:585px;">
    <div class="container">
        <div class="row ptpage" >
            <div class="col-7" style="padding-top:55px;">
                <span class="title-font ">
                    Enjoys MAKE<span class="blue">IT</span>'s<br>
                    Portfolio
                </span>
            </div>        
        </div>
        <div class="row ptpage" style="margin-top:27px;">
            <span class="subtitle-font">
                MAKEIT는 클라이언트와의 인연을 소중히하고<br>
                만족시킬 준비가 되어있습니다
            </span>
        </div>
    </div>
</div>
    <div class="container">
        <div class="port-info">
            <div class="port-info-title">
                <p class="p1">{{ $port->main_title }}</p>
                <p class="p1">{{ $port->category }}<br></p>
                <p class="p2">주소 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $port->link }}<br></p>
                <p class="p2">제작 날짜&nbsp;&nbsp;{{ $port->dep_date }}<br></p>
            </div>
            <div class="port-img">
                <?php
                    echo $port->main_imgurl;
                ?>
            </div>
        </div>
    </div>
@endsection