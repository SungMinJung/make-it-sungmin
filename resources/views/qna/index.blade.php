@extends('layouts.app')
    <style>
.qa {
  background: url("https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/87914826-FC99-4754-96FB-EE7AFAAD5041.png") no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  width: 1920px;
  height: 585px;
  position: relative;
  text-align: center;
  margin: 0 auto;
  z-index: -1;
}

.qa::before {
  content: "";
  display: block;
  -moz-filter: blur(1px) brightness(0.5);
  -ms-filter: blur(1px) brightness(0.5);
  -o-filter: blur(1px) brightness(0.5);
  filter: blur(1px) brightness(0.5);
  position: absolute;
  left: 1px;
  top: 1px;
  right: 1px;
  bottom: 1px;
  background: inherit;
  z-index: 0;
}

.content{
    position: relative;
  z-index: 10;
  padding-top: 50px;

}
.content-td {
  position: relative;
  z-index: 10;
  padding-top: 50px;
}

.title {
  font-family: arial;
  font-size: 3em;
  color: white;
  font-weight: 900;
  margin: 20px;
}
.title #it{
  color:#0066ff;
}

.qa_form{
        text-align:center;
        line-height:20px;
    }

.qa_form #form1 img{
    width:21.6px;
    height:21.6px;
}
label {
    width:60px;
    float:left;
    font-size:12px;
    line-height:24px;
    font-weight:bold;

}
input {
    width:954px;
    height:56px;
    margin-bottom:5px;
    line-height:18px;
    padding:2px 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border:1px solid #CCC;
    background:url('/img/search.jpg');
    background-position:top right; 
  background-repeat:no-repeat;

}
/* 여기서부터는 테이블  */
#notice_title{
    margin-top:5%;
    font-size:20px;
    text-align:center;
    margin-bottom:13px;
}
#notice_title>.col-1{
    cursor: pointer;
}
#notice_table td{
    border-bottom:2px solid #707070;
}
#notice_table #notice-td{
    padding:20px 20px 20px 20px;
    text-align:center;
    width:2%;
}
#notice_table #icon{
    width:80px;
    height:23px;
    color:white;
    border-radius:52px;
    padding:5px 0px 5px 0px;
    background:#0066ff;
    font-weight:bold;

}
#notice_table #qna{
    color:#0066ff;
    padding:5px 0px 5px 0px;
    font-weight:bold;
    font-size:30px;
    font-family: 'Noto Sans KR', sans-serif;

}
#notice_table #question{
    text-align:center;
    padding:15px 0 15px 0;


}

#notice_table #content{

    width:50%;
    padding-left:12px;
}
#horizen{
    border:1px solid #3d3d3d;
}
.qna-btn{
    float:right;
}
.qna-btn-up, .qna-btn-down{
    border:0px;
    background: #fff;
}
.qna-btn-up{
    display: none;
    background-color: rgba(0,0,0,0);
}
.ans-content{
    padding:20px 2px 20px 10px;
    
    padding-left:12px;
}
.ans-tr{
    display: none;
}
.notice_table{
    transition: all 350ms ease;
}
table { 
    border-spacing: 0;
    border-collapse: collapse;
}
td {
    padding:20px 20px 20px 20px;

}
td img {
    display:block;
    margin:0px auto;
}
#QA .col-1{
    font-weight: bold;
}
    </style>


@section('content')

<body>
    <div class='qa'>
        <div class='content'>
          <div class='title'><p id="ask"> MAKE <span id="it"> IT </span> 에게 물어봐주세요</p></div>

     <div class="qa_form">
      
         <form id="form1" name="form1" method="post" action="">
           <input name="name" id="name" type="text" style="background:url('/img/search.jpg');" /><br />
       </form>
   </div>

        </div>
      </div>

{{--  --}}
    <div id="QA" class="container">
        <div class="row" id="notice_title">
            <div class="col-1" data-rel="all">전체</div>
            <div class="col-1" data-rel="notice">공지사항</div>
            <div class="col-1" data-rel="qna">Q&A</div>
        </div>
        <hr id="horizen">
    

        <table id="notice_table">
            @foreach ($notices as $item)
                <tr class=" {{$item->category}} all">    
                    <td id="notice-td">
                        @if ( $item->category == "notice")
                            <div id="icon">공지</div>
                        @else 
                            <div id="qna">Q</div>
                        @endif
                    </td>

                    <td id="content-td">{{ $item->subject }}</td>

                    <td>
                        <div class="qna-btn">
                            <span class="qna-btn-down" data-target={{ $item->id }}><img src="/image/qnadown.png"></span>
                            <span class="qna-btn-up" data-target={{ $item->id }}><img src="/image/qnaup.png"></span>
                        </div>
                    </td>
                </tr>
                {{--답변--}}
                <tr class="ans-tr {{ $item->id }}">   
                    <td style="text-align: center;">
                        @if ( $item->category == "qna")
                            <img src="/image/A.png">
                        @endif
                    </td>
                    <td class="ans-content" colspan="2">{{ $item->content }}</td>
                </tr>
            @endforeach

        </table> 
        {{-- <table id="notice_table">
            @foreach ($notices as $notice)
            <tr>
                <td id="notice-td"><div id="icon">공지</div></td>
                <td id="content-td">{{$notice->subject}}</td>
                <td>
                    <div class="qna-btn">
                            <span class="qna-btn-down"><img src="/image/qnadown.png"></span>

                    </div>
                </td>
           </tr>
                
            @endforeach
            <tr></tr>
        </table> --}}
      </div>
    @include('main.6');
@endsection