@extends('layouts.app')
<style>
    .bg{
        background-image: url("https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/486E9E1C-9108-4CD0-B826-F17B393C160F.png");
        /* background:no-repeat; */
        /* margin-right:5%; */
        width:100%;
        height:695px;
        margin:0 auto;
    }
    .about_it{

    }
    .smooth{

    }
    .action{
        position:relative;
    }
</style>

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
            $(".smooth").delay(100).show().animate({opacity:1, top:"50px"},'slow');
        // $(.smooth).slideDown("slow");
        // $(.smooth1).slideDown("slow");
        // $(.smooth2).slideDown("slow");
        // $(.smooth3).slideDown("slow");
        // $(.smooth4).slideDown("slow");
        // $(.smooth5).slideDown("slow");
        // $(.smooth6).slideDown("slow");
    });
</script>
<div class="bg">
    <div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <div class="action">
            {{-- F<span class="about_it">IT</span>적합하고 --}}
            <img class="smooth" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/50F779DD-1D16-47AC-A01F-728ADF0587FD.svg" alt="">
            <img class="smooth1" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/36FA8FCA-2AAE-4316-9526-F0E7041210A2.svg" alt="">
            <img class="smooth2" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/2300796B-9BC0-455E-B5CA-3B1380A87D64.svg" alt="">
            <img class="smooth3" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/3A6CF6DB-D524-4DD1-9975-F75C9093392E.svg" alt="">
            <img class="smooth4" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/3A6CF6DB-D524-4DD1-9975-F75C9093392E.svg" alt="">
            <img class="smooth5" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/2DBC345C-F3AD-4C31-9C59-F9215347EA12.svg" alt="">
            <img class="smooth6" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/CFAC09D5-26F7-4265-A785-214A8A3927CE.svg" alt="">
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    </div>
</div>
    
@endsection