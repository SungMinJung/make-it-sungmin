@extends('layouts.app')
@section('content')
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
        #header{
            width: 100%;
            height: 100px !important;
            border-bottom: 1px solid #707070;
            margin:0 auto;
        }
    
        #menu{
            /* margin-left:5%; */
            /* margin: 0 auto; */
            padding:36px 2px 36px 0px;
            /* font-family: NotoSansCJKkr-Regular; */
            font-size:20px;
            color:#707070 !important;
            text-decoration: none;
        }
        #menu a:hover{
            color:#0066ff;
        }
        #menu a{
            text-decoration: none;
            color: #707070;
        }
        #logo{
            /* margin-left:12%; */
            margin: 0 auto;
            padding-top:1%;
            padding-left:5%;
        }
    
        /*  */
    
    #navBar1 ul ul {
    display: none;
    }
    
    #navBar1 ul {
     padding: 0;
     margin: 0;
     list-style: none;
     position: relative;}
    
     #navBar1 ul li {
     display: block;
     float: left;
    
    } 
    
    
    
     #navBar1 ul li a {
     display: block;
     text-decoration: none;
     font-family: Tahoma, Geneva, sans-serif;
     text-align:right;
     padding-left:16px;
     padding-top:-9px;
     }
     #navBar1 ul li a:hover {
     color: #0066ff;
     text-decoration: none;
    }
    
    
     #navBar1 ul ul {
    
     position: absolute;
     top: 30px;
     background: rgb(255,255,255);
     opacity:0.7;
     width: 487px;
     height:48px;
     border: thin solid #849c92;
     font-size: 70%;
     display: none;}
    
     #navBar1 ul li:hover ul {
     position: absolute;
     display: block;
     border-radius:30px;
     text-decoration:none;
     box-shadow: 5px 10px 18px #888888;
     
    }
    
     #navBar1 ul ul li {
    
        padding: 11px 15px 12px 0px;
    
    }
    
     #navBar1 ul ul li a {
     border: none;
     color: #707070;
     font-size:17px;
    
    }


    </style>

            <div class="row" id="header">
                <div id="logo" class="col-2">
                            <a class="" href="home"> <img id="logo" src="/img/logo.png" alt=""></a>

                </div>
                <div id="menu" class="col-1" style="color:#0066ff;">
                    <a class="menunav" style="padding-left:44%;" href="javascript:;">Home</a> 
                </div>
                <div id="menu" class="col-1">
                        <a class="menunav" style="padding-left:15%;" href="javascript:;">About us </a> 
                </div>
                <div id="menu" class="col-1">
                        <div id = "navBar1">
                                <ul>
                                <li > <span> <a href="#">Service
                                    <img src="/img/dropdown.png" alt="">  </a> </span>
                                <ul>
                                <li > <a class="menunav on" href="{{route('service.web')}}"> WebSite </a> </li>
                                <li > <a class="menunav" href="{{route('service.mobile')}}"> Mobile Application </a> </li>
                                <li > <a class="menunav" href="{{route('service.responsive')}}"> Responsive Website </a> </li>
                                </ul>
                                </li>       
                                </ul>
                            </div>
               </div>
               <div id="menu" class="col-1">
                       <a style="padding-left:22%;" class="menunav" href="{{route('portfolio')}}"> Portfolio </a>
               </div>
               <div  id="menu" class="col-1" style="text-align:center;">
                     <a style="padding-left:6%;" class="menunav" href="{{route('qna')}}"> Q&A</a>
               </div>
                <div id="menu" class="col-1">
                       <a class="menunav" href="{{route('contact')}}">Contact us</a>  
                </div>
                <div class="col-2"></div>
            </div>

@endsection
