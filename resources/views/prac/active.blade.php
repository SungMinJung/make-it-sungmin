<style>
    <style>
    .tabmenu {position:relative;}
    .tabmenu img {border:none;vertical-align:top;}
    .tabmenu ul {padding:0px;list-style:none;}
    .tabmenu ul li {float:left;}
    .tabmenu .tabcontent {display:none; width:240px;height:125px;position:absolute; left:0px;top:100px }
    .tabcontent a{margin-top:10%;}
    .tabmenu .morebtn {position:absolute;right:0;top:30px;}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".tabmenu").each(function(){
            var tab = $(this).children("ul");
            var tabBtn = tab.children("li").children("a");
            var content = tabBtn.nextAll();
             
            // 탭버튼을 클릭했을때
            tabBtn.click(function(){
                // 이미 on 상태면 pass
                if( $(this).hasClass("on") ) return;
 
                // 모든 컨텐츠 부분을 안보이게 한뒤
                content.hide();
 
                // 클릭한 tab 버튼(a태그) 옆의 모든 태그들은 보이도록
                $(this).nextAll().show();
                 
                // 모든탭 버튼에 있던 on 클래스를 빼고
                // 현재 클릭한 탭메뉴 버튼에 on 클래스 추가
                tabBtn.removeClass("on");
                $(this).addClass("on");
                 
                // 탭버튼를 쭉 돌면서 on 클래스가 있는 버튼만 on 이미지로 바꾸고
                // 나머지 버튼들은 off 이미지로 바꾼다.
                tabBtn.each(function(){
                    var src;
                    var img = $(this).children("img");
                    if( $(this).hasClass("on") ){
                        src = img.attr("src").replace("_off.", "_on.");
                    }else{
                        src = img.attr("src").replace("_on.", "_off.");
                    }
                     
                    img.attr("src", src);
                });
            });
             
            // 맨첫번째 탭버튼 클릭처리
            tabBtn.eq(0).click();
        });
    });
</script>



<div class="tabmenu">
        <h2>첫번째 탭메뉴</h2> 
     
        <ul>
            <li><a href="#link"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/menu_01_on.gif" alt="메뉴01" /></a>
                <ul class="tabcontent">
                    <li><a href="#">1제목이 나오는부분.....</a></li>
                    <li><a href="#">2제목이 나오는부분.....</a></li>
                </ul>
                <p class="morebtn"><a href="#"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/more.gif" alt="MORE" /></a></p>
            </li>

            <li><a href="#link"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/menu_02_off.gif" alt="메뉴02" /></a>
                <ul class="tabcontent">
                    <li><a href="#">무우우우우우우우.....</a></li>
                    <li><a href="#">5무우우우우우우우ㄴ.....</a></li>
                </ul>
                <p class="morebtn"><a href="#"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/more.gif" alt="MORE" /></a></p>
            </li>

            <li><a href="#link"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/menu_03_on.gif" alt="메뉴03" /></a>
                <ul class="tabcontent">  
                    <li><a href="#">요농이 요느마</a></li>
                    <li><a href="#">요농이 요느마</a></li>
                </ul>      
                <p class="morebtn"><a href="#"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/more.gif" alt="MORE" /></a></p>
            </li>

            <li><a href="#link"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/menu_04_off.gif" alt="메뉴04" /></a>
                <ul class="tabcontent">
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                </ul>
                <p class="morebtn"><a href="#"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/more.gif" alt="MORE" /></a></p>
            </li>
        </ul>
    </div>
     
    {{-- <div class="tabmenu">
        <h2>두번째 탭메뉴</h2>  
        <ul>
            <li><a href="#link"><img src="https://ts.daumcdn.net/custom/blog/28/285810/skin/images/menu_01_on.gif" alt="메뉴01" /></a>
                <ul class="tabcontent">
                    <li><a href="#">제목이 나오는부분.....</a></li>
                    <li><a href="#">제목이 나오는부분.....</a></li>
                </ul>
            </li>
            <li><a href="#link"><img src="/img/logo.png" alt="메뉴02" /></a>
                <ul class="tabcontent">
                    <li><a href="#">무우우우우우우우.....</a></li>
                    <li><a href="#">무우우우우우우우ㄴ.....</a></li>
                </ul>
            </li>
                <li><a href="#link"><img src="/img/logo.png" alt="메뉴03" /></a>
                <ul class="tabcontent">  
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                </ul>
            </li>
            <li><a href="#link"><img src="/img/logo.png" alt="메뉴04" /></a>
                <ul class="tabcontent">
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                    <li><a href="#">ㄷㄹㄴㄹㄴㄹㄴㄷㄹㄴㄹ</a></li>
                </ul>
            </li>
        </ul>
    </div> --}}
    
    