<style>
.bluetitle {
    font-weight: 500;
    color: #0066FF;
}

.btn {
    width: 224px;
    height: 51px;
    text-align: center;
    font-size: 15px;
    font-family: inherit;
    font-weight: bold;
    
}

.blue {
    border-color: #0066FF;
    background-color: #ffffff;
    color:#0066FF;
}

.blue:active {
    background-color: #0066FF;
    color: #ffffff;
}

.gray {
    background-color: #ffffff;
    color: #3d3d3d;
}

.gray:active {
    background-color: #3d3d3d;
    color: #ffffff;
}

.title {
    font-size: 40px;
    color: #3d3d3d;
    font-weight: 900;
    font-family: 'Noto Sans KR', sans-serif;
}

.sub {
    font-size: 30px;
    color: #3d3d3d;
    font-weight: 500;
    font-family: 'Noto Sans KR',sans-serif;
}

</style>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>

<!-- <script type="text/javascript"> -->
<script>


</script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <div class="row" style="background-image:url('/image/46.png'); width:1920px; height:330px; margin:0 auto;" id="bimg2" >
        <div class="container"style="margin-top:60px;"> 
            <p><span class="title">Mobile Appilcation</p></span>
            <p class="sub" style="margin-top:10px;">모바일 어플리케이션</p><br>
            <button type="submit" class="btn gray" style="margin:0px auto; margin-top:20px;" onclick="location.href='{{ route('service.mobile') }}'">자세히 알아보기</button>
        </div>
    </div>


    

    <div class="row" style="background-image:url('/image/47.png'); width:1920px; height:330px; margin:0 auto;"id="bimg3">
        <div class="container"style="margin-top:60px;"> 
            <p><span class="title">Website</p></span>
            <p class="sub" style="margin-top:10px;">웹사이트</p><br>
            <button type="submit" class="btn gray" style="margin:0px auto; margin-top:20px;" onclick="location.href='{{ route('service.web') }}'">자세히 알아보기</button>
        </div>
    </div>
    
    <div class="row" style="background-image:url('/image/49.png'); width:1920px; height:330px; margin:0 auto;"id="bimg4">
        <div class="container"style="margin-top:60px;"> 
            <p><span class="title">Responsive Website</p></span>
            <p class="sub" style="margin-top:10px;">반응형 웹사이트</p><br>
            <button type="submit" class="btn gray" style="margin:0px auto; margin-top:20px;" onclick="location.href='{{ route('service.responsive') }}'">자세히 알아보기</button>
        </div>
    </div>
