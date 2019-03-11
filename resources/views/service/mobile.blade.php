@extends('layouts.app')

@section('content')

{{-- 가로 리스트 생성 jquery --}}


</script>
<div class="row" style="background-image:url('/img/servicemobilebg.jpg');width:1920px;height:733px;margin:0px auto;">
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5" style="margin-top:190px;">
                <span class="servicesmall font-noto-eng" style="color:#3d3d3d ;">Mobile Application Development</span><br>
                <span class="servicebig font-noto-kr" style="color:#3d3d3d;white-space:nowrap;">모바일 어플리케이션 개발 및 제작</span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5" style="margin:60px 0px 60px 0px;position:relative;left:10px;">
                <span class="workprocesscontent font-noto-kr" style="color:#3d3d3d; white-space:nowrap; line-height: 30px;">
                    비즈니스 목적에 맞는 경쟁력있는 모바일 어플리케이션을 제작합니다.<br>
                    고객의 니즈를 정확하게 이해하고 최신 트렌드를 반영한 앱 제작을 목표로 합니다.
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-1">
                <hr style="border-width:4px;border-color:#3d3d3d;" noshade>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-3" style="margin-top:5px;margin-bottom:15px;">
                <span class="font-noto-eng" style="color:#3d3d3d;font-size:17px;font-weight:600;">Mobile Application Category</span>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5">
                <span class="workprocesscontent font-noto-eng" style="color:#3d3d3d; line-height: 30px;">
                    Arts &amp; Entertainment · Community · Education · Events · Health &amp; Fitness ·
                    Hospitality &amp; Tourism · Personal · Property &amp; Construction · E-COMMERCE · 
                    Fashion · Music · Food · Travel · Beauty · Living · Services etc
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding-top:66px;">
        <span class="servicesmall" style="position:relative;left:10px;">Price Information</span>
    </div>
    <div class="row">
        <span class="servicebig" style="position:relative;left:10px;">MAKEIT에서는 고객에게<br>
        5가지 방식을 제안해드립니다.</span>
    </div>
    <div class="row" style="padding-top:60px;">
        <div class="col-10">
            <ul class="tab">
                <li id="bar1" data-tab="tab1">BASIC</li>
                <li id="bar2" data-tab="tab2">GENERAL</li>
                <li id="bar3" data-tab="tab3">SHOPPING MALL</li>
                <li id="bar4" data-tab="tab4">CUSTOM</li>
                <li id="bar5" data-tab="tab5">PREMIUM</li>
            </ul>
            <br>
            <div class="row" style="height:5px; background:#f2f2f2; margin:20px 0 50px 0;">
                <div id="bar" style="width:20%; height:100%; background:#0066ff; transform: translate(0, 0); transition: transform 500ms;"></div>
            </div>
            <div id="tab1" class="tabcontent current">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span class="sertop">기본 모바일 어플리케이션 제작</span><br>
                            <span class="sertopbot">Basic Mobile Application</span>
                        </p>
                    </div>
                    <div class="col-3" style="position:relative;right:10px;padding-top:30px;">
                        <span class="sermid">2,000,000원</span><br>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <span class="sermidbot">
                                <span style="white-space:nowrap;">기본 모바일 어플리케이션으로 내용이 복잡하지 않고 전체 15page 내외로 제작하시는 경우에 적합합니다.</span><br>
                                빠른 제작 기간과 저렴한 가격을 원하시는 고객께 추천드리며 프랜차이즈 웹사이트, 회사소개 사이트, 이벤트 웹페이지,
                                포트폴리오 사이트 등 소개 및 홍보 목적을 가진 사이트에 적합합니다.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 serbot">
                            - 메인화면 1 page<br>
                            - 서브화면 10 page<br>
                            - 게시판 4 page<br>
                            - 제작기간 2~4주<br>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab2" class="tabcontent">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span class="sertop">일반 모바일 어플리케이션 제작</span><br>
                            <span class="sertopbot">General Mobile Application</span>
                        </p>
                    </div>
                    <div class="col-4" style="position:relative;right:10px;padding-top:30px;">
                        <span class="sermid">5,000,000원</span><br>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <span class="sermidbot">
                                일반 모바일 어플리케이션으로 내용이 복잡하지 않고 전체 15~40page 내외로 제작하시는 경우에 해당됩니다.<br>
                                빠른 제작 기간과 저렴한 가격을 원하시는 고객께 추천드리며 병원, 미술관, 갤러리,<br>
                                피트니스 웹사이트 등 소개 및 홍보 목적을 가진 사이트에 적합합니다.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 serbot">
                            - 메인화면 1 page<br>
                            - 서브화면 15 ~ 30 page<br>
                            - 게시판 10 page<br>
                            - 제작기간 3 ~ 6주<br>
                        </div>
                    </div>
                </div> {{--row클래스--}}
            </div>

            <div id="tab3" class="tabcontent">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span class="sertop">쇼핑몰 제작</span><br>
                            <span class="sertopbot">Shopping Mall Mobile Application</span>
                        </p>
                    </div>
                    <div class="col-4" style="position:relative;right:10px;padding-top:30px;">
                        <span class="sermid">5,000,000원</span><br>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <span class="sermidbot">
                                독립형 쇼핑몰로 저렴한 비용과 간편한 기능을 갖춘 쇼핑몰을 원하시는 고객에게 추천드립니다.<br>
                                경제적이고 간편한 기능으로 제공하는 기본 구성의 쇼핑몰로 약 4~5주 기간의 맞춤 제작으로 진행됩니다.<br>
                                자신의 상품에 맞는 쇼핑몰을 제작하세요.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 serbot">
                            - 화면 10 ~ 30 page<br>
                            - 제작기간 4 ~ 5주<br>
                        </div>
                    </div>
                </div> {{--row클래스--}}
            </div>

            <div id="tab4" class="tabcontent">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span class="sertop">맞춤형 모바일 어플리케이션 제작</span><br>
                            <span class="sertopbot">Custom Mobile Application</span>
                        </p>
                    </div>
                    <div class="col-4" style="position:relative;right:10px;padding-top:30px;">
                        <span class="sermid">견적문의</span><br>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <span class="sermidbot" style="position:relative;right:18px;">
                                비즈니스가 복잡하고 디자인보다 다양한 기능성이 필요시되는 사이트 구축 및 쇼핑몰을 원하시는 고객에게 추천드립니다.<br>
                                스타트업 웹 서비스, 고객관리시스템(CRM), 웹하드, 구인구직 웹사이트, 부동산 사이트 등<br>
                                독립된 판매 프로세스와 고객이 기획한 맞춤기능 제작이 필요한 경우에 해당됩니다.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 serbot">
                            - 개발화면 50 page 이상<br>
                            - 제작기간 협의 필요<br>
                        </div>
                    </div>
                </div> {{--row클래스--}}
            </div>

            <div id="tab5" class="tabcontent">
                <div class="row">
                    <div class="col-1">
                        <hr style="border-width:9px;border-bottom-color:#3d3d3d;" noshade>
                    </div>
                    <div class="col-9" style="position:relative;right:10px;">
                        <p>
                            <span class="sertop">프리미엄 모바일 어플리케이션 제작</span><br>
                            <span class="sertopbot">Premium Mobile Application</span>
                        </p>
                    </div>
                    <div class="col-4" style="position:relative;right:10px;padding-top:30px;">
                        <span class="sermid">10,000,000원</span><br>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <span class="sermidbot">
                                해당 사이트에 대한 구상이 막연하고 페이지의 수가 가늠이 가지 않는 고객에게 추천드립니다.<br>
                                프리미엄 상품은 기존 80page를 잡고 필요 시 계속해서 추가할 수 있습니다.<br>
                                그때그때 필요할 때 페이지를 빠르게 추가해보세요.
                            </span>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2 serbot">
                            - 개발화면 80 page 이상<br>
                            - 제작기간 협의 필요<br>
                        </div>
                    </div>
                </div> {{--row클래스--}}
            </div>    
                
        </div>
    </div>
</div>

{{-- @include('service.process') --}}
<div class="web">
    <div class="bg" >
        <div class="container">
                                      <div class="process">
                                        <img id="sadari" src="/img/sadari.svg" alt="">
                                         <p id="title_en" class="font-noto-eng">Work Process</p>
                                         <p id="title_ko" class="font-noto-kr">제작 과정</p>
                        
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
                                                    <img  src="/img/servicecircle.svg" alt="">
                                                       <span id="content">고객의 요구사항 정의</span>
                                                </span>
                                                <span id="icon">
                                                        <img  src="/img/servicecircle.svg" alt="">
                                                           <span id="content"> 견적 및 계약 진행</span>
                                                </span>
                        
                                                <div id="icon"  >
                                                        <img  src="/img/servicecircle.svg" alt="">
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
                                                            <img  src="/img/servicecircle.svg" alt="">
                                                               <span id="content"> 서비스 연장</span>
                                                        </div>
                                                        <div id="icon">
                                                                <img  src="/img/servicecircle.svg" alt="">
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
                                                     <div class="box_content"><p> 고객의 요구사항 분석, 벤치마킹 및 경쟁사 등을 통하여 Site Map, 구체화,</p>
                                                         <p>스토리보드, 수행계획서 등 기획 작업이 이루어집니다. 메인 디자인과 서브디자인</p>
                                                         <p>에 대해 고객과의 커뮤니케이션을 통한 최고의 디자인을 만듭니다.</p>
                        
                                                             </div>
                                                             <div class="horizen_div">
                        
                                                                     <div id="icon"  style="" >
                                                                         <img  src="/img/servicecircle.svg" alt="">
                                                                            <span id="content"> 고객의 니즈 분석</span>
                                                                     </div>
                                                                     <div id="icon"  >
                                                                             <img  src="/img/servicecircle.svg" alt="">
                                                                                <span id="content"> 수행 계획서 작성</span>
                                                                     </div>
                                                                    
                                                                    <div id="icon"   >
                                                                            <img  src="/img/servicecircle.svg" alt="">
                                                                                <span id="content">경쟁사 분석</span>
                                                                    </div>  
                                                                    <div id="icon" >
                                                                            <img  src="/img/servicecircle.svg" alt="">
                                                                                <span id="content">스토리보드 작성</span>
                                                                    </div>   
                        
                                                             <div id="icon">
                                                             <img src="/img/servicecircle.svg" alt="">
                                                                <span id="content">Site Map 작성</span>
                                                             </div>
                        
                                                             <div id="icon" >  
                                                             <img  src="/img/servicecircle.svg" alt="">
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
                                                                <img  src="/img/servicecircle.svg" alt="">
                                                                    <span id="content"> 고객 웹 가이드라인 제작</span>
                                                            </div>
                                                            <div id="icon">
                                                                    <img  src="/img/servicecircle.svg" alt="">
                                                                        <span id="content">보증기간 동안 유지보수 진행</span>
                                                            </div>
                                                            <div id="icon">
                                                                    <img  src="/img/servicecircle.svg" alt="">
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
                                                                        <img  src="/img/servicecircle.svg" alt="">
                                                                            <span id="content">프로그래밍 진행</span>
                                                                    </div>
                                                                    <div id="icon">
                                                                            <img  src="/img/servicecircle.svg" alt="">
                                                                                <span id="content">프로그래밍 최적화</span>
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
                                                                <img  src="/img/servicecircle.svg" alt="">
                                                                    <span id="content">오픈 전 최종 검수</span>
                                                            </span>
                                                            <span id="icon">
                                                                    <img  src="/img/servicecircle.svg" alt="">
                                                                        <span id="content">서비스 런칭</span>
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



            <div class="container">
                <div class="row" style="padding-top:66px;">
                    <p>
                        <p class="servicesmall" style="width:100%;">Free Service</p><br>
                        <p class="servicebig">웹사이트 제작 시 7가지의 무료 서비스를 제공합니다.</p>
                    </p>
                    <div class="col-5">
                        <p class="freeservicetitle">1. 유지보수 1년 무상제공</p><br>
                        <p class="freeservicecontent lineadjust" style="bottom:25px;">
                            -간단한 텍스트 수정 및 이미지 교체 작업<br>
                            -홈페이지 최적화 유지<br>
                            -실시간 미러링(Mirroring) 1일 1회 백업 시스템 제공<br>
                        </p>
                    </div>
                    <div class="col-6" style="position:relative;bottom:15px;">
                        <p class="freeservicetitle" >2. 웹호스팅 1년 무상 제공</p>
                        <span class="freeservicecontent">
                            -1년간 호스팅 무료지원(HDD 용량 500MB + 트랙픽 800MB 업그레이드 별도)
                        </span>
                    </div>
                    <div class="col-7">
                        <p class="freeservicetitle">3. 도메인 1년 무료 등록 및 관리</p>
                        <span class="freeservicecontent">
                            -.com, .co.kr, .net, .kr 등 원하는 도메인으로 검색 등록 및 1년간 무료서비스 제공
                        </span>
                    </div>
                    <div class="col-5">
                        <p class="freeservicetitle">4. 홈페이지 원본 소스 제공</p>
                        <span class="freeservicecontent">
                            -포토샵, 프로그램 등 개발 시 산출된 경로가 일체 원본 제공
                        </span>
                    </div>
                    <div class="col-8">
                        <p class="freeservicetitle">5. 검색엔진 등록 지원 서비스</p>
                        <span class="freeservicecontent">
                            구글, 네이버, 다음 등 포털 사이트에 회사명으로 쉽게 노출이 될 수 있도록 사이트 등록을 도와드립니다.<br><br>
                            <span style="font-size:15px;font-weight:lighter;">*사이트 등록이란, 회사명을 검색하면 사이트 등록된 업체의 홈페이지 주소와
                            간략한 설명, 지도, 관련 앱문서 등 정보를 볼 수 있어서 고객들이 쉽게 회사 관련 정보를 찾을 수 있도록 하는 것을 말합니다.</span>
                        </span>
                    </div>
                    <div class="col-8">
                        <p class="freeservicetitle">6. 웹 표준 크로스 브라우징 무료 적용</p>
                        <p class="freeservicecontent lineadjust">
                            주요 웹 브라우저(익스플로러, 크롬, 사파리, 파이어폭스 등)와 모바일 접속 시 웹 호환성을 고려하여 웹 표준 크로스
                            브라우징 코딩을 무료로 적용해드립니다. 각종 스마트폰(안드로이드, IOS) 및 아이패드, 갤럭시탭 등에서 PC에서 보여지는
                            것과 동일하게 서비스됩니다.
                        </p>
                    </div>
                    <div class="col-7" style="margin-bottom:70px;">
                        <p class="freeservicetitle">7. 기업메일 계정 무료 제공</p>
                        <span class="freeservicecontent">
                            고객의 도메인으로 다음(Daum)의 무료 기업메일 계정을 쓰실 수 있도록 세팅하여 드립니다.<br><br>
                            <span style="font-size:15px;font-weight:lighter;">*네이버/구글은 유료이며 고객님 요청 시 연결 작업 가능</span>
                        </span>
                    </div>
                </div>
                @include('main.6')
            </div>
        </div>
    </div>
</div>

@endsection