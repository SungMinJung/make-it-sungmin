@extends('gentelella.app')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('pagetitle', 'Q&A 및 공지사항')

<style>
.ques{
    height:50px;
}
</style>
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

            @component('gentelella.panel')
                @slot('title')
                    <h2>공지 추가</h2>
                @endslot

                <form action="{{route('admin.qnastore',['type'=>'qna'])}}" class="form-horizontal form-label-left" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">
                            질문 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 " >
                            <input type="text" name="subject" id="subject" required="required" class="form-control col-md-7 col-xs-12 ques" style="height:50px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">
                            답변 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="content" name="content" id="content" required="required" class="form-control col-md-7 col-xs-12 " style="height:50px;">
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            사진업로드 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <image-form src="/img/seongyeom.jpg"></image-form>
                        </div>
                    </div>   --}}


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">등록</button>
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