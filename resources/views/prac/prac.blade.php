@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
    ul {list-style-type:none;max-width:200px;}
    .list {border:1px solid #cccccc;padding:5px;} /* 기본 css 및 선택하지 않은 경우 */
    .list.on {border:1px solid red;} /* 선택한 경우 css */
    </style>
    
    <ul>
     <li ><a class="list" href="javascript:;">1. okkks.tistory.com</a></li>
     <li ><a class="list" href="javascript:;">2. okkks.tistory.com</a></li>
     <li ><a class="list" href="javascript:;">3. okkks.tistory.com</a></li>
     <li ><a class="list" href="javascript:;">4. okkks.tistory.com</a></li>
     <li ><a class="list" href="javascript:;">5. okkks.tistory.com</a></li> 
    </ul>
    
    <script type="text/javascript">
    $('a').click(function() {
     $('a').removeClass('on');
     $(this).addClass('on');
    });
    </script>
    
    
    
    
@endsection