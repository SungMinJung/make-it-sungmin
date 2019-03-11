@extends('gentelella.app')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @component('gentelella.panel')
            @slot('title')
                <h2>포트폴리오 정보</h2>
            @endslot
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
        
        
        @endcomponent
    </div>
</div>
@endsection