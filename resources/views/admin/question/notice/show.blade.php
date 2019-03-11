@extends('gentelella.app')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('pagetitle', 'Q&A 및 공지사항')


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

            @component('gentelella.panel')
                @slot('title')
                    <h2>공지 추가</h2>
                @endslot


                <form action="{{route('admin.notice.store')}}" class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                            아이디 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- <input type="text" id="title" required="required" class="form-control col-md-7 col-xs-12"> --}}
                            {{$notice->id}}

                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                            제목 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- <input type="text" id="title" required="required" class="form-control col-md-7 col-xs-12"> --}}
                            {{$notice->subject}}

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">
                            내용 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- <input type="content" id="content" required="required" class="form-control col-md-7 col-xs-12" style="height:250px;"> --}}
                            
                            {{-- <img src="{{$notice->img}}" alt="" style="width:100%;"> --}}
                            {{$notice->content}}
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                             <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <image-form src="/img/seongyeom.jpg"></image-form>
                        </div>
                    </div>   --}}


                    <div class="ln_solid"></div>
                    <div class="form-group" style="text-align:center;">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a href="{{route('admin.notice.index')}}">
                                <button class="btn btn-primary" type="button">취소</button>
                            </a>
                        </div>
                    </div>


                </form>

                
            @endcomponent

    </div>
</div>
@endsection