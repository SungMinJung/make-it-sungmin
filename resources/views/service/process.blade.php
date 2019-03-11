@extends('layouts.app')
<style>
     /* .process img{
        height:1345px;
        width:100%;
    } */
    #title_en{
        margin-top:0%;
        padding-top:4%;
        line-height:36px;
        font-size:30px;
    }
    #title_ko{
        font-size:43px;
        font-weight:bold;
    }
     .bg{
        background:url('https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/358BBE00-1F41-4638-AAEC-6F57ACF47018.png') no-repeat;
        width:1920px;
        height:1345px;
    }
    .process #box{
        /* padding : 35px 35px 35px 35px; */
        z-index:100;
        /* margin-top:-90px; */

        padding-left:35px;
        width:530px;
        height:278px;
        border:1px solid #BFBFBF;
        border-radius:44px;
        box-shadow: 2px 2px grey;
        padding-top:54px;
        background:white;
        position:relative;
    }
    #box .box_title{
        margin-top:-20px;
        font-size:25px;
        font-weight:bold;
        color: #707070;
        margin-bottom: 20px;
    }
    #box .box_content {
        margin-bottom:33px;
    }
    #box .box_content p{
        font-size:14px;
        color: #3d3d3d;
        position:relative;
    }
    #box #icon{
        /* width:160; */
        /* width:50%;         */
        /* height:30px; */
        /* margin:0px 150px 10px 0px; */
        /* margin-right:150px; */
        /* padding-bottom:30px; */
        font-size:12px;
        color:#3d3d3d;
        font-weight:bold;

        
    }
    #box #icon img{
        weight:19px; 
        height:19px;
        /* padding: 7px 7px 7px 7px; */
        padding-right:6px;
        /* padding-bottom:5px; */
    }
    #box #icon #content{
        /* width:105px;
        height:18px; */
        /* padding-top:-10px; */
        /* padding-bottom:-22px; */
        /* margin-top:60px; */
    }
    #sadari{
        /* margin-top:99%;*/
        margin-left:15%;
        margin-top:7%; 
        z-index:2;
        position:absolute;
  

    }
    .horizen_div{
/* display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px; */
margin: 0; padding: 0; width:100%; font-size: 0;

    }
    .horizen_div #icon{
        width:45%; display: inline-block; *display: inline; zoom: 1;  font-size: 12px; 
    }
</style>

@section('content')
    

<div class="web">
    <div class="bg">
        <div class="container">
            <div class="process">
                <img id="sadari" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/AC1C3FDE-C53E-4AFC-9A14-9D68087318A2.png" alt="">
                 <p id="title_en">Work Process</p>
                 <p id="title_ko">제작 과정</p>

                 {{-- <img id="box" style="padding-top:54px;" src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/A87629E7-B532-445A-AAD4-DB4BB1483AF2.png" alt=""> --}}
                 <div class="row">
                     <div class="col-5">
                     <div id="box" style="">
                        <div class="box_title"> 1. 클라이언트와 미팅</div>
                        <div class="box_content"><p> 프로젝트를 진행하기 전 고객의 홈페이지의 목적과 요구사항 및 구성을 정의하고</p>
                            <p> 다양한 레퍼런스와 경쟁사를 분석하여 고객만의 차별성있는 사이트를 제작하기</p>
                            <p>위해 리서치를 진행합니다. 컨설팅 후, 이를 토대로 기획/디자인/프로그래밍 등에</p>
                            <p>대한 작업량과 인력 등 견적을 산출한 후 계약을 진행합니다.</p>

                        </div>
                        <div class="horizen_div">

                        <span id="icon">
                            <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                               <span id="content"> 요구사항 정의</span>
                        </span>
                        <span id="icon">
                                <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                   <span id="content"> 견적 및 계약 진행</span>
                        </span>

                        <div id="icon" style="margin-top:15px;" >
                                <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                   <span id="content">아이디어 구상 및 레퍼런스 리서치</span>
                        </div> 
                    </div>           
                    </div>{{-- 여기가 박스    --}}
                </div>

                <div class="col-5">
                        <div id="box" style="margin-top:27%; height:200px;">
                                <div class="box_title"> 6. 연장 or 서비스 종료</div>
                                <div class="box_content"><p> 보증기간 만료 후, 서비스 연장 혹은 서비스 종료를 선택하시면 해당사항에 맞는</p>
                                    <p> 절차가 진행됩니다.</p>
                                </div>
                                <div class="horizen_div">

                                <div id="icon">
                                    <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                       <span id="content"> 서비스 연장</span>
                                </div>
                                <div id="icon">
                                        <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                           <span id="content"> 서비스 종료</span>
                                </div>
                            </div>
                            </div>{{-- 여기가 박스    --}}

                </div>
            </div>
                

                <div class="row">
                    <div class="col-5">
                     <div id="box"  style="margin-top:-10%; height:275px;">
                             <div class="box_title"> 2. 서비스 기획 및 디자인</div>
                             <div class="box_content"><p> 고객의 요구사항 분석, 벤치마킹 및 경재사 등을 통하여 Site Map, 구체화,</p>
                                 <p>스토리보드, 수행계획서 등 기획 작업이 이루어집니다. 메인 디자인과 서브디자인</p>
                                 <p>에 대해 고객과의 커뮤니케이션을 통한 최고의 디자인을 만듭니다.</p>

                                     </div>
                                     <div class="horizen_div">

                                             <div id="icon"  style="" >
                                                 <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                    <span id="content"> 고객의 니즈 분석</span>
                                             </div>
                                             <div id="icon"  >
                                                     <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                        <span id="content"> 수행 계획서 작성</span>
                                             </div>
                                            
                                            <div id="icon"   >
                                                    <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                        <span id="content">경쟁사 분석</span>
                                            </div>  
                                            <div id="icon" >
                                                    <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                        <span id="content">스토리보드 작성</span>
                                            </div>   

                                     <div id="icon">
                                     <img src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                        <span id="content">Site Map 작성</span>
                                     </div>

                                     <div id="icon" >  
                                     <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                        <span id="content">디자인</span>
                                     </span>
                                    </div>
                            </div>

                         </div>{{-- 여기가 박스    --}}
                        </div>

                    <div class="col-5">
                            <div id="box" style="margin-top:32px; height:222">
                                    <div class="box_title"> 5. 교육 및 유지보수</div>
                                    <div class="box_content"><p>고객에게 웹 가이드라인을 제작 및 교육을 진행합니다. 최종 완료 후 보증기간</p>
                                        <p>동안 유지보수 합니다.</p>
                                    </div>
                                    <div class="horizen_div">

                                    <div id="icon">
                                        <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                            <span id="content"> 고객 웹 가이드라인 제작</span>
                                    </div>
                                    <div id="icon">
                                            <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                <span id="content">보증기간 동안 유지보수 진행</span>
                                    </div>
                                    <div id="icon">
                                            <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                               <span id="content">고객 웹 가이드라인 교육</span>
                                    </div>
                                </div>  
                        </div>{{-- 여기가 박스    --}}
                    </div>
                </div>


                <div class="row">
                        <div class="col-5">
                        <div id="box" style="margin-top:-1%; height:222px;">
                                <div class="box_title"> 3. 프로그래밍</div>
                                <div class="box_content"><p>기획 및 디자인 내용을 바탕으로 프로그래밍을 진행합니다. 다양한 요구사항을 사</p>
                                    <p>용가능한 기능을 재탄생시키는 작업이며 가장 안정적이며,빠른 서비스를 만들기</p>
                                    <p>위해 노력합니다.</p>
                                </div>
                                
                                    <div class="horizen_div">

                                            <div id="icon">
                                                <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                    <span id="content"> 요구사항 정의</span>
                                            </div>
                                            <div id="icon">
                                                    <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                        <span id="content"> 견적 및 계약 진행</span>
                                            </div>
                                    </div>
                    
                    </div>{{-- 여기가 박스    --}}
                    </div>
                    <div class="col-5">
                        <div class="right_box">
                            <div id="box" style="height:210px;margin-top:25px;">
                                    <div class="box_title"> 4. 오픈 및 테스트</div>
                                    <div class="box_content"><p>디자인 및 개발이 완료된 후 최종적인 오픈 전 검수 단계를 진행합니다. 최정 검수</p>
                                        <p>가 완료된 후 정상적인 오픈을 세팅하여 런칭합니다.</p>
                
                                    </div>
                                    <div class="horizen_div">
                                    <span id="icon">
                                        <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                            <span id="content"> 요구사항 정의</span>
                                    </span>
                                    <span id="icon">
                                            <img  src="https://cdn.zeplin.io/5c492537058fa079f196c51a/assets/28ABF346-F659-42A7-B7B9-6489F6864A68.png" alt="">
                                                <span id="content"> 견적 및 계약 진행</span>
                                    </span>
                                </div>
                       </div>{{-- 여기가 박스    --}}
                    </div>
                  </div>
                </div>  {{--row끝--}}
            </div>
        </div>
    </div>
</div>
@endsection